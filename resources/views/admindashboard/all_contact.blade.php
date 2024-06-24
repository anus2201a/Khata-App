@extends('admindashboard.layouts.app')
@section('content')
    <!-- End Header -->
    <!-- NFTmax Dashboard -->
    <section class="nftmax-adashboard nftmax-show">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-12 setting-main ">
                    <div class="d-flex align-items-start">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">

                                <div class="row">

                                    @if (session()->has('success'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong> {{ session()->get('success') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <div class="col-lg-12">
                                        <div class="row border border-3 border-dark m-auto py-2">
                                            <div class="personal-informations-from-btn col-lg-6 m-auto">
                                                <h2 align="left"><b>All Contacts </b></h2>
                                            </div>
                                            <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}
                                            </div>
                                        </div><br>

                                        {{-- <div class="container-fluid"> --}}
                                        <div class="card m-auto p-auto">
                                            <div
                                                class="card-header col-lg-12 d-flex justify-content-between align-items-center">
                                                <h4 class="card-title col-lg-10">All Contacts</h4>
                                                {{-- <button type="submit" ">Add Member</button> --}}
                                                {{-- <a href="{{route('blog.add')}}" class="btn-one success text-white pt-3">Add Blog</a> --}}
                                            </div>

                                            <div class="card-body">
                                                <table id="example" class="table table-bordered table-striped "
                                                    style="width:100%">

                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone no</th>
                                                            <th>Subject</th>
                                                            <th>Message</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($data as $contact)
                                                            <tr>
                                                                <td>{{ $contact->name }}</td>
                                                                <td>{{ $contact->email }}</td>
                                                                <td>{{ $contact->phone_no }}</td>
                                                                <td>{{ $contact->subject }}</td>
                                                                <td>{{ $contact->message }}</td>
                                                                <td class="col-lg-2">
                                                                    <div class="col-lg-12 d-flex">
                                                                        {{-- <a href="" class="btn-one success text-white pt-3">Update</a><br> --}}

                                                                        <button
                                                                        update-id={{ route('contact.update', $contact->id) }} data-name={{ $contact->name }} data-email={{ $contact->email }} data-phone_no={{ $contact->phone_no }}  data-subject={{ $contact->subject }} data-message={{ $contact->message }}
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#updateModal"
                                                                        class="btn-one text-white pt-3 update-button">Update</button>


                                                                        <button
                                                                            data-id="{{ route('contact.delete', $contact->id) }}"
                                                                         data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal"
                                                                            class="btn-one danger bg-danger text-white pt-3 delete-button">Delete</button>



                                                                        {{-- <a href="" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal"
                                                                            class="btn btn-danger ml-2">Delete</a> --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>



                                                <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Update Employee</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form action="" method="POST" class="emp_update" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                              <label for="recipient-name" class="col-form-label">Name:</label>
                                                              <input type="text" value="" class="form-control emp_name" id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Email:</label>
                                                                <input type="text" value="" class="form-control emp_email" id="recipient-name">
                                                              </div>
                                                              <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Phone no:</label>
                                                                <input type="text" value="" class="form-control emp_phone_no" id="recipient-name">
                                                              </div>
                                                              <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Subject:</label>
                                                                <input type="text" value="" class="form-control emp_subject" id="recipient-name">
                                                              </div>

                                                              <div class="mb-3">
                                                                <label for="message-text" class="col-form-label">Message:</label>
                                                                <textarea class="form-control emp_message" value="" id="message-text"></textarea>
                                                              </div>
                                                          </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="submit" class="btn-one bg-secondary col" data-bs-dismiss="modal">Close</button>
                                                          <button type="submit" class="btn-one col text-white pt-3 record_update">Update</button>
                                                            {{-- <a href="" class="btn-one col text-white pt-3 emp_update">
                                                                Update</a> --}}
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>


                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h3>Are you sure delete this Contact</h3>
                                                            </div><br>
                                                            <div class="modal-footer">
                                                                {{-- <div class="row"> --}}
                                                                <button type="button" class="btn-one bg-secondary col"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                {{-- <button type="button" id="emp_id" class=" btn-one col">Yes, Delete</button> --}}
                                                                <a href="" class="btn-one col pt-3 emp_del">Yes,
                                                                    Delete</a>
                                                                {{-- </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                        </div>
                                    </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </section>


    <!-- End NFTmax Dashboard -->
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete-button').click(function() {
        // console.log('here');
    var emp = $(this).attr('data-id')
    // console.log(emp);
    $('.emp_id').attr('href',emp);
    });
});

$(document).ready(function() {
    $('.update-button').click(function() {
        var emp_id = $(this).attr('update-id')
        var name = $(this).attr('data-name')
        var email = $(this).attr('data-email')
        var phone_no = $(this).attr('data-phone_no')
        var subject = $(this).attr('data-subject')
        var message = $(this).attr('data-message')
        // var url = route('contact.update' + emp_id ) ;
        // console.log(url);


    $('.emp_name').attr('value',name);
    $('.emp_email').attr('value',email);
    $('.emp_phone_no').attr('value',phone_no);
    $('.emp_subject').attr('value',subject);
    $('.emp_message').attr('value',message);
    $('.emp_message').text(message);
    // console.log(emp_id);
    $('.emp_update').attr('action',emp_id);

    $("form").submit(function(){
  alert("Submitted");
});
});
    });

</script>
