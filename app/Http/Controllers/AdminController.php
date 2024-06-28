<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Home;
use App\Models\logo;
use App\Models\Team;
use App\Models\User;
use App\Models\About;
use App\Models\Career;
use App\Models\Config;
use App\Models\contact;
use App\Models\Service;
use App\Models\web_cms;
use App\Models\Category;
use App\Models\Platform;
use App\Models\Our_Service;
use App\Models\services_faq;
use Illuminate\Http\Request;
use App\Models\cms_contacts;
use App\Models\khata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        // if(Auth::check()){
        return view('admindashboard.index');
        // }
        // else{
        //     return redirect()->route('login');
        // }

    }

    // if (!function_exists('get_cms')) {
    //     function get_cms($slug){
    //         $cms = \App\Models\web_cms::where('slug', $slug)->first();
    //         if(isset($cms->id)){
    //             return $cms->value;
    //         }
    //         return '';
    //     }
    // }

    // CMS Home
    public function cms_home_form()
    {
        return view('admindashboard.cms_home_form');
    }






    public function update_cms(Request $request)
    {
        // $data= $request->all();
        $data = $request->except('_token', 'tag');
        foreach ($data as $key => $val) {
            $web_cms = web_cms::where('slug', $key)->where('tag', $request->tag)->first();

            // dd($logo);

            if ($request->hasFile($key)) {
                $val = $this->image_upload($val);
            }
            if (isset($web_cms->id)) {

                $web_cms = web_cms::where('slug', $key)->where('tag', $request->tag)->update(['value' => $val]);
            } else {
                $web_cms = web_cms::create([
                    'name' => ucfirst(str_replace('_', ' ', $key)),
                    'slug' => $key,
                    'value' => $val,
                    'tag' => $request->tag,

                ]);
            }
        }
        return redirect()->back()->with('success', 'Record Updated');
    }

    // CMS About
    public function cms_about_form()
    {

        return view('admindashboard.cms_about_form');
    }


    // CMS Career
    public function cms_career_form()
    {

        return view('admindashboard.cms_career_form');
    }

    // CMS Service
    public function cms_service_form()
    {

        return view('admindashboard.cms_service_form');
    }

    // CMS Contact
    public function cms_contact_form()
    {
        return view('admindashboard.cms_contact_form');
    }


    // Team Management
    public function add_team_member()
    {
        $team = Team::all();
        return view('admindashboard.add_team_member', compact('team'));
    }

    public function add_team_member_post(Request $request)
    {

        $data = new Team();
        $data->name = $request->name;
        $data->profession = $request->profession;
        if ($request->hasFile('image'))
            $image = $request->image;
        $imagename = $this->image_upload($image);
        $data->img = $imagename;
        $data->save();
        return redirect()->route('team.view');
    }


    // public function view_team_member()
    // {
    //     $team = Team::all();
    //     return view('admindashboard.all_team_member', compact('team'));
    // }

    public function update_team_member($id)
    {
        $update_team = Team::find($id);
        return view('admindashboard.update_team_member', compact('update_team'));
    }

    public function update_team_member_post(Request $request, $id)
    {

        $exist = Team::find($id);

        $data = Team::find($id);
        $data->name = $request->name;
        $data->profession = $request->profession;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imagename = 'teamImages/' . $image->getClientOriginalName() . '_' . time() . '.' . $image->getClientoriginalExtension();
            $image->move(public_path('teamImages/'), $imagename);
        }

        if (file_exists(public_path($exist->image))) {
            unlink(public_path($exist->image));
        };
        // dd($imagename);
        $data->image = $imagename;
        $data->update();
        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function delete_team_member($id)
    {
        $team = Team::find($id);
        if (file_exists(public_path($team->img))) {
            unlink(public_path($team->img));
        };
        $team->delete();

        return redirect()->route('team.view')->with('success', 'Deleted Successfully');
    }


    // Platform Management

    public function add_platform()
    {
        return view('admindashboard.add_platform');
    }

    public function add_platform_post(Request $request)
    {

        $data = new Platform();
        $data->name = $request->tittle;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('platform.view')->with('success', 'Added Successfully');
    }

    public function view_platform()
    {
        $data = Platform::all();
        return view('admindashboard.all_platform', compact('data'));
    }

    public function update_platform($id)
    {
        $update_platform = Platform::find($id);
        return view('admindashboard.update_platform', compact('update_platform'));
    }

    public function update_platform_post(Request $request, $id)
    {

        $data = Platform::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->update();
        return redirect()->route('platform.view')->with('success', 'Updated Successfully');
    }

    public function delete_platform($id)
    {
        $platform = Platform::find($id);
        $platform->delete();

        return redirect()->route('platform.view')->with('succes s', 'Deleted Successfully');
    }

    // Category Management

    public function category_form()
    {
        return view('admindashboard.add_category');
    }

    public function category_post(Request $request)
    {
        $data = new Category();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('category.view')->with('success', 'Record Added Successfully');
    }

    public function view_category()
    {
        $data = Category::all();
        return view('admindashboard.all_category', compact('data'));
    }

    public function update_category_form($id)
    {
        $update_category = Category::find($id);
        return view('admindashboard.update_category', compact('update_category'));
    }

    public function update_category_post(Request $request, $id)
    {

        $data = Category::find($id);
        $data->name = $request->name;
        $data->update();
        return redirect()->route('category.view')->with('success', 'Record Update');
    }

    public function delete_category(Request $request, $id)
    {

        $data = Category::find($id);
        $data->delete();
        return redirect()->route('category.view')->with('success', 'Record Deleted');
    }

    // Services Management

    public function service_form()
    {
        $data = Category::all();
        return view('admindashboard.add_service', compact('data'));
    }

    public function service_post(Request $request)
    {
        $data = new our_service();
        $data->name = $request->name;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $filename = 'homeImages/' . $file->getClientOriginalName() . '_' . time() . '.' . $file->getClientoriginalExtension();
            // $imagename = 'homeImages/' . $file->getClientOriginalName() . '_' . time() . '.' . $image->getClientoriginalExtension();
            $file->move(public_path('homeImages/'), $filename);
        }
        $data->image = $filename;
        $data->category = $request->category;
        $data->overview = $request->overview;
        $data->save();
        return redirect()->route('service.view')->with('success', 'Record Added Successfully');
    }

    public function view_service()
    {
        $data = our_service::with('get_category')->get();
        return view('admindashboard.all_service', compact('data'));
    }

    public function update_service_form($id)
    {

        $data = our_service::find($id);
        $category = Category::all();
        return view('admindashboard.update_service', compact('data', 'category'));
    }

    public function update_service_post(Request $request, $id)
    {

        $exist = our_service::find($id)->first();

        $data = our_service::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->overview = $request->overview;
        $file = $request->image;
        if ($request->hasFile('image')) {
            $filename = 'homeImages/' . $file->getClientoriginalName() . '_' . time() . '.' . $file->getClientoriginalExtension();
            $file->move(public_path('homeImages/'), $filename);
            $data->image = $filename;
        }
        if (file_exists(public_path($exist->image))) {
            unlink(public_path($exist->image));
        }

        $data->update();
        return redirect()->route('service.view')->with('success', 'Update Successfully');
    }

    public function delete_service($id)
    {
        $data = our_service::find($id);
        if (file_exists(public_path($data->image))) {
            unlink(public_path($data->image));
        }
        $data->delete();
        return redirect()->route('service.view')->with('success', 'Record Deleted');
    }

    // Blog Management

    public function blog_form()
    {
        $data = Category::all();
        return view('admindashboard.add_blog', compact('data'));
    }

    public function blog_post(Request $request)
    {
        $data = new blog();
        $data->tittle = $request->tittle;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $filename = 'homeImages/' . $file->getClientOriginalName() . '_' . time() . '.' . $file->getClientoriginalExtension();
            $file->move(public_path('homeImages/'), $filename);
        }
        $data->image = $filename;
        $data->save();
        return redirect()->route('blog.view')->with('success', 'Record Added Successfully');
    }

    public function view_blog()
    {
        $data = blog::all();
        return view('admindashboard.all_blog', compact('data'));
    }

    public function update_blog($id)
    {
        $data = blog::find($id);
        return view('admindashboard.update_blog', compact('data'));
    }

    public function update_blog_post(Request $request, $id)
    {

        $data = blog::find($id);
        $data->tittle = $request->tittle;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $exist_image = $data->image;
            if (file_exists(public_path($exist_image))) {
                unlink(public_path($exist_image));
            }
            $file = $request->image;
            $filename = 'homeImages/' . $file->getClientoriginalName() . '_' . time() . '.' . $file->getClientoriginalExtension();
            $file->move(public_path('homeImages/'), $filename);
            $data->image = $filename;
        }


        $data->update();

        return redirect()->route('blog.view')->with('success', 'Updated Successfully');
    }

    public function delete_blog($id)
    {
        $data = blog::find($id);
        if (file_exists(public_path($data->image))) {
            unlink(public_path($data->image));
        }
        $data->delete();

        return redirect()->route('blog.view')->with('success', 'Deleted Successfully');
    }


    // Services-Faqs Management

    public function service_faqs_form()
    {
        $data = Category::all();
        return view('admindashboard.add_service_faqs', compact('data'));
    }

    public function service_faqs_post(Request $request)
    {
        $data = new services_faq();
        $data->question = $request->question;
        $data->answer = $request->answer;
        $data->category_id = $request->category;
        $data->save();
        return redirect()->route('service-faqs.view')->with('success', 'Added Successfully');
    }


    public function all_service_faqs()
    {
        $data = services_faq::where('is_active', 1)->where('is_deleted', 0)->with('service_category')->get();
        return view('admindashboard.all_service_faqs', compact('data'));
    }

    public function update_service_faqs($id)
    {
        $data = services_faq::find($id);
        $category = Category::all();
        return view('admindashboard.update_service_faqs', compact('data', 'category'));
    }

    public function update_service_faqs_post(Request $request, $id)
    {
        $data = services_faq::find($id);
        $data->question = $request->question;
        $data->answer = $request->answer;
        $data->category_id = $request->category;
        $data->update();
        return redirect()->route('service-faqs.view')->with('success', 'Record Updated');
    }

    public function delete_service_faqs($id)
    {
        $data = services_faq::find($id);
        $data->delete();
        return redirect()->route('service-faqs.view')->with('success', 'Record Deleted');
    }



    // Website Logo Management
    public function website_logo()
    {
        $logo['logo-black'] = web_cms::where('slug', 'logo-black')->where('tag', 'logo-favicon')->first();
        $logo['logo-white'] = web_cms::where('slug', 'logo-white')->where('tag', 'logo-favicon')->first();
        $logo['favicon'] = web_cms::where('slug', 'favicon')->where('tag', 'logo-favicon')->first();
        return view('admindashboard.website_logo', compact('logo'));
    }


    public function image_upload($image)
    {
        $imagename = 'web_cms_images/' . $image->getClientOriginalName() . '_' . time() . '.' . $image->getClientoriginalExtension();
        $image->move(public_path('web_cms_images/'), $imagename);
        return $imagename;
    }

    // Config Management
    public function config_form()
    {
        return view('admindashboard.config');
    }

    public function contact_view()
    {
        $data =  contact::all();
        return view('admindashboard.all_contact', compact('data'));
    }


    public function update_contact(Request $request, $id)
    {
        $data = contact::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone_no = $request->phone_no;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->update();

        return redirect()->route('contact')->with('success', 'Thank you for Contact');
    }

    public function delete_contact($id)
    {
        $data =  contact::find($id);
        $data->delete();
        return redirect()->route('contact.view')->with('success', 'Deleted Successfully');
    }

    public function listing($slug = '')
    {
        $table = $this->generic_table($slug);
        return view('admindashboard.all_team_member', compact('table'));
    }

    public function listing_manage($slug = '')
    {

        $manage_table = $this->manage_table($slug);
        return view('admindashboard.manage_khata', compact('manage_table'));
    }

    public function user_khata($slug = '', $id = null)
    {
        $model = null;
        if ($id) {
            // dd($id);
            $data = 'App\Models\khata';
            $model = $data::where('user_id', $id)->distinct()->get();
        }
        // $data = $this->manage_table($slug, $id, $model);
        return view('admindashboard.user_khata', compact('id', 'model'));
    }

    public function generate_form($slug = '', $id = null)
    {
        $model = null;
        if ($id) {
            $data = 'App\Models\\' . $slug;
            $model = $data::find($id);
        }
        $form = $this->generic_form($slug, $model);
        return view('admindashboard.add_team_member', compact('form', 'id'));
    }


    private function generic_form($slug = '', $model)
    {
        $body = '';
        if ($slug == 'User') {
            $data = 'App\Models\\' . $slug;
            $body .= '   <form action="' . route('crud_generate', $slug) . '" enctype="multipart/form-data" method="POST">
                                                 <input type="hidden" name="_token" value="' . csrf_token() . '">
                                                  <input type="hidden" name="id" value="' . ($model ? $model->id : '') . '">
                                             <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Name</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    aria-label="Last name" value="' . ($model ? $model->name : '') . '">
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Email</label>
                                                                <input type="text" name="email" class="form-control"
                                                                    aria-label="Last name" value="' . ($model ? $model->email : '') . '">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">

                                                        </div>

                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">User Role</label>
                                                                <select name="role_id" class="form-control">
                                                                 <option value="" selected disabled>Please choose an option</option>
                                                                    <option value="2">Customer</option>
                                                                    <option value="3">Suplier</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Phone no</label>
                                                                <input type="text" name="phone_no" class="form-control"
                                                                    aria-label="Last name" value="' . ($model ? $model->phone_no : '') . '">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="personal-informations-from-btn">
                                                <button type="submit" class="btn-one">Save Profile</button>
                                                </div>
                                            </div>
                                        </form>';

            $resp['body'] = $body;
            return $resp;
        } elseif ($slug == 'khata') {
            $data = 'App\Models\\' . $slug;
            $user = 'App\Models\User';
            $loop = $user::where('is_active', 1)->where('is_deleted', 0)->get();
            $body .= '   <form action="' . route('crud_generate', $slug) . '" enctype="multipart/form-data" method="POST">
                                                 <input type="hidden" name="_token" value="' . csrf_token() . '">
                                                  <input type="hidden" name="id" value="' . ($model ? $model->id : '') . '">
                                                  <input type="hidden" name="hold_value" class="hold_value" id="hold_value">
                                             <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Name</label>
                                                                <input type="text" name="name" id="myname" class="form-control myname"
                                                                    aria-label="Last name" value="' . ($model ? $model->name : '') . '">
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Amount</label>
                                                                <input type="number" name="amount" id="amount" class="form-control"
                                                                    aria-label="Last name" value="' . ($model ? $model->amount : '') . '">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">

                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">User</label>



                                                                     <select id="select_page" name="user_id" class="form-control operator">

                                                                                                                                                                                            <option value="" selected disabled>Please choose an option</option>';
            if ($loop) {
                foreach ($loop as $key => $value) {
                    $body .= '<option value="' . $value->id . '"' . ($value->id === ($model ? $model->user_id : '') ? 'selected' : '') . '>' . $value->name . '</option>';
                }
            }
            $body .= '</select>
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description</label>
                                                                <input type="text" name="description" class="form-control"
                                                                    aria-label="Last name" value="' . ($model ? $model->description : '') . '">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="personal-informations-from-btn">
                                                <button type="text" class="btn-one">Save Profile</button>
                                                </div>
                                            </div>
                                        </form>';

            $script = 'var inputs = $("input").keyup(function (e) {
                                if (e.key == ",") {
                                    // console.log("demo");
                                    e.preventDefault();
                                    var nextInput = inputs.get(inputs.index(this) + 1);
                                    if (nextInput) {
                                    nextInput.focus();
                                    }
                                }
                            });

                                var getname = document.getElementById("myname").value;
                                var getamount = document.getElementById("amount").value;
                                var hold_value = document.getElementById("hold_value").value;
                                var merge = [];

                            var inputs = $("input").keypress(function (e) {
                                 if (e.key == "Enter") {
                                     e.preventDefault();
                                    var name = document.getElementById("myname").value;
                                    var amount = document.getElementById("amount").value.trim();;
                                    //   var merge = [name + amount + ","];
                                    //   var name = document.getElementById("myname").value = "";
                                    //   var amount = document.getElementById("amount").value = "";
                                      merge.push(merge);
                                    //   var hidden_input = hold_value.value = ;
                                      console.log(merge);

                                    //   var hidden_value = hold_value.value = name.replace(/,/g, ","+amount+",");


                                    //   var merge2 = merge + name + amount;
                                        // console.log(hidden_input);

                                    //  var amount = document.getElementById("amount").value;
                                    //  var name = document.getElementById("myname").setAttribute("value",amount);
                                    var nextInput = inputs.get(inputs.index(this) - 1);
                                    if (nextInput) {
                                    nextInput.focus();
                                    }
                                }
                            });


                            // var amounts = [];
                            // $("#amount").keypress(function (e) {
                            //     if (e.key == "Enter") {
                            //         e.preventDefault();
                            //         var name = document.getElementById("myname").value;
                            //         var new_name = name.lastIndexOf(",");
                            //         amounts.push(name.substring(new_name + 1));
                            //         amounts.push($(this).val());
                            //         console.log(amounts)
                            //     }
                            // });
                            ';

            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == 'Category') {
            $data = 'App\Models\\' . $slug;
            $body = ' <form action="' . route('crud_generate', $slug) . '" enctype="multipart/form-data" method="POST">

                                             <input type="hidden" name="_token" value="' . csrf_token() . '">
                                              <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12 col-lg-12">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Name</label>
                                                                <input type="text" value="" name="name"
                                                                    class="form-control" aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-12 col-lg-12">
                                                <div class="personal-informations-from-btn float-start">

                                                    <button type="submit" class="btn-one">Submit</button>

                                                </div>
                                            </div>


                                        </form>';
            $resp['body'] = $body;
            return $resp;
        }
    }



    private function generic_table($slug = '')
    {
        $body = '';
        if ($slug == 'User') {
            $data = 'App\Models\\' . $slug;
            $loop = $data::where('is_active', 1)->where('is_deleted', 0)->get();
            if ($loop) {
                $body .= '<thead>
                        <tr >
                            <th>S. no</th>
                            <th>Name</th>
                            <th>UserType</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $value) {

                        $body .= ' <tr>
                        <td>' . ++$key . '</td>





                                <td>' . $value->name . '</td>
                                <td>' . ($value->role_id == "1" ? 'Admin' : ($value->role_id == "2" ? 'Customer' : 'Supplier')) . '</td>
                                <td>' . $value->email . '</td>
                                <td>' . $value->phone_no  . '</td>
                                <td class="col-lg-2">
                                    <div class="col-lg-12">
                                    <a href="' . route('generate', ['slug' => $slug, 'id' => $value->id]) . '" class="btn-one success text-white pt-3">Update</a><br>' .
                            // <a href="' . route("team.delete", $value->id) . '" class="btn-one danger bg-danger text-white pt-3">Delete</a>
                            '</div></td>
                            </tr>';
                    }
                }
                $body .= '</tbody>';
            }
            // dd($body);
            $resp['body'] = $body;
            return $resp;
        } elseif ($slug == 'khata') {
            $data = 'App\Models\\' . $slug;
            // $loop = $data::where('is_active', 1)->where('is_deleted', 0)->get();
            $loop = $data::where('is_active', 1)->where('is_deleted', 0)->get();
            // dd(unserialize($loop->name));
            // dd($loop);
            if ($loop) {
                $body .= '<thead>
                        <tr >
                            <th>S. no</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>User</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>';
                if ($loop) {
                    // dd(unserialize($loop->name));

                    foreach ($loop as $key => $value) {
                        $body .= ' <tr>
                        <td>' . ++$key . '</td>

                                <td>' . $value->name . '</td>
                                <td>' . $value->amount . '</td>
                                <td>' . ($value->get_user->name ??  '') . '</td>
                                <td class="col-lg-2">
                                    <div class="col-lg-12">
                                    <a href="' . route('generate', ['slug' => $slug, 'id' => $value->id]) . '" class="btn-one success text-white pt-3">Update</a><br>' .
                            '<a href="' . route('generate', ['slug' => $slug, 'id' => $value->id]) . '" class="btn btn-primary text-center text-white pt-3">Manage</a><br>' .
                            '</div></td>
                            </tr>';
                    }
                }
                $body .= '</tbody>';
            }
            // dd($body);
            $resp['body'] = $body;
            return $resp;
        } elseif ($slug == 'Category') {
            $data = 'App\Models\\' . $slug;
            $loop = $data::all();
            if ($loop) {
                $body .= '<thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $value) {

                        $body .= '<tr>
                                    <td>' . $value->name . ' </td>
                                    <td class="col-lg-2">
                                        <div class="col-lg-12 d-flex">
                                        <a href="' . route('generate', $slug, $value->id) . '" class="btn-one success text-white pt-3">Update</a><br>
                                        <a href="' . route('generate', $slug, $value->id) . '" class="btn-one danger bg-danger text-white pt-3">Delete</a>
                                    </div></td>
                                </tr>';
                    }
                }
                $body .= '</tbody>';
            }
            $resp['body'] = $body;
            return $resp;
        } else {
            return $body;
        }
    }

    private function manage_table($slug = '')
    {
        $body = '';
        if ($slug == 'User_khata') {
            $data = 'App\Models\\' . $slug;
            $loop = $data::where('is_active', 1)->where('is_deleted', 0)->get();
            // dd($loop);
            if ($loop) {
                $body .= '<thead>
                        <tr >
                            <th>S. no</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>';
                if ($loop) {

                    foreach ($loop as $key => $value) {

                        $body .= ' <tr>
                        <td>' . ++$key . '</td>

                                <td>' . $value->name . '</td>
                                <td class="col-lg-2">
                                    <div class="col-lg-12">
                                    <a href="' . route('user_khata', ['slug' => $slug, 'id' => $value->id]) . '" class="btn-one success text-white pt-3">Manage Khata</a><br>' .
                            // <a href="' . route("team.delete", $value->id) . '" class="btn-one danger bg-danger text-white pt-3">Delete</a>
                            '</div></td>
                            </tr>';
                    }
                }
                $body .= '</tbody>';
            }
            // dd($body);
            $resp['body'] = $body;
            return $resp;
        } else {
            return $body;
        }
    }




    public function crud_generate($slug = '', Request $request)
    {

        // $name = serialize(json_encode(array_values($request->all())));
        // $name = unserialize($name);
        // // $name = serialize(array($request->all()));
        // dd($name);

        $data = 'App\Models\\' . $slug;
        $req = $request->except('_token', 'image');
        // dd($req);
        if ($request->hasFile('image')) {
            $image = $this->image_upload($request->image);
            $req['image'] = $image;
            // dd($req['image']);
        }
        if ($request->id) {
            $update = $data::where('id', $request->id)->update($req);
            $message = "Record Updated";
        } else {
            if ($slug == "User") {
                $req['password'] = Hash::make($request->password);
            }

            $array = $request->name;
            $array = explode(',', $array);
            // dd($array);
            $name = [];
            $amount = [];
            foreach ($array as $key => $value) {
                // dd($value);
                if ($key % 2 == 0) {
                    $name[] = $value;
                    // dd('yes');
                } else {
                    $amount[] = $value;
                    // dd('no');
                }

                // dd($array, $name, $amount);
            }
            foreach ($name as $key => $value) {
                $create = $data::create([
                    // 'name' => serialize($req),
                    'name' => $value,
                    'user_id' => $request->user_id,
                    'amount' => $amount[$key],
                    'description' => $request->description,
                ]);
            }


            // dd($create);


            $message = "Record Created";
        }

        // $seralize = serialize($req);

        // $unSeralize = unserialize($seralize);

        // dd($seralize, $unSeralize );

        //  dd($create);
        return redirect()->route('listing', $slug)->with('success', $message);
    }
}
