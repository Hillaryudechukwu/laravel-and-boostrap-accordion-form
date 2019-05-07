@extends('layout.main') @section('form')

    {{-- <h1 class="font-weight-light text-center"><strong>Registration</strong></h1> --}}

    <div class="accordion" id="accordionExample">


         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif {{-- check if form was submitted successfully --}} @if ($message = Session::get('flash_message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            
         
        <div class="card">
                       
                     <button class="btn collapsed rounded "  type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <h5> Step 1: Your details </h5>
                    </button>             

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample"> 
                <div class="card-body text-left">
                    <form action="/" method="POST" class="needs-validation" novalidate>
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">First Name: <span>*</span></label>
                                <input type="text" name="name" class="form-control"  placeholder=""  required>
                                <div class="invalid-feedback">First name (required)</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSurname">Surname: <span>*</span></label>
                                <input type="text" name="Surname" class="form-control" id="inputSurname" placeholder="" required>
                                <div class="invalid-feedback">Last name (required)</div>
                            </div>

                            <div class="form-group col-md-6">

                                <label for="inputEmail4">Email Address: <span>*</span></label>
                                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="" required>
                                <div class="invalid-feedback">E-mail address (required, must be a valid email address, e.g. name@example.com)</div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm float-right rounded collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Next></button>

                </div>
            </div>
        </div>
        <div class="card">          
                <button class="btn collapsed rounded " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                               <h5> Step 2: More comments</h5>
                                      </button>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body text-left">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Mobile number <span>*</span></label>
                            <input type="tel" name="phone" class="form-control"   required>
                            <div class="invalid-feedback">Mobile number (required, must be a valid UK mobile number, e.g. 07000000000)</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Gender <span>*</span></label>
                            <select  name="gender" class="form-control" required>
                                                    <option selected>Choose...</option>
                                                      <option value="male" name="gender">Male</option>
                                                    <option value="female" name="gender">Female</option>
                                               </select>
                            <div class="invalid-feedback">Gender (required)</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date">Date of birth <span>*</span></label>
                            <input type="date" class="form-control" id="dob" name="dob" required>

                            <div class="invalid-feedback">Date of birth (required, must follow the pattern of dd/mm/yyyy, e.g. 02/11/1990)</div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm float-right  rounded collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Next></button>
                </div>
            </div>
        </div>
        <div class="card">
            
                      <button class="btn collapsed rounded "  type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5>Step 3: Final comments</h5>
                   </button>              
            
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body text-left">
                    <label for="inputComment">Comments </label>
                    <textarea class="form-control" name="comment" id="inputComment" ></textarea>

                    <div class="invalid-feedback">Comments (can be empty)</div>

                </div>
                <button  type="submit" class="btn btn-primary btn-sm mr-4 rounded float-right">Submit</button>
            </div>
            
            </form>
        </div>
    </div>
</div>

@endsection