
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

    <title>Hello, world!</title>
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  </head>
  <style>
      *{
          padding: 0;
          margin: 0 auto;
      }
      body{
          background-color: #41AC73;
      }
      
        #loader{
            position: absolute;
            width: 200px;
            right: -60px;
            top: -13px;
        }
        
    
  </style>
  <body>
      <div class="container" style="justify-content: center;font-size:18px;">
          <div class="row">
              <div class="col-md-8">
                  <div class="card m-5">
                      <div class="card-body">
                          <div class="card-head">
                              <a href="{{ url('/') }}"><button style="float: right" class="btn btn-info m-2" >Back To Home</button></a>
                              <h3>Patient Form</h3>
                              
                          </div>
                        <form action="{{ url('/PatientStore')}}" method="POST" enctype="multipart/form-data" >
                        @csrf 
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">রোগীর ধরন?</label>
                            <select name="patient_type" class="form-control" id="exampleFormControlSelect1">
                            <option value="নতুন রোগী">নতুন রোগী</option>
                            <option value="ID নম্বর প্রাপ্ত">ID নম্বর প্রাপ্ত</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">আগামী কত  দিন পর আপনি ডাক্তারের সাথে সাক্ষাতকার করতে চান?</label>
                            <select name="appoint_time" class="form-control" id="exampleFormControlSelect1">
                            <option value="২ দিন">২ দিন</option>
                            <option value="৫ দিন">৫ দিন</option>
                            <option value="১০ দিন">১০ দিন</option>
                            <option value="১৫ দিন">১৫ দিন</option>
                            <option value="৩০ দিন">৩০ দিন</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>রোগীর নামঃ</label>
                            <input type="text" name="patient_name" class="form-control" placeholder="রোগীর নাম">
                        </div>
                        <div class="form-group">
                                  <label for="">Gender</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="inlineRadio1" value="male">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="inlineRadio1" value="female">
                                        <label class="form-check-label" for="inlineRadio1">Female</label>
                                    </div>
                        </div>
                        <div class="form-group">
                            <label>রোগীর মোবাইল নম্বর (ইংরাজি নম্বরঃ 01800000000)</label>
                            <input type="number" name="patient_phone" class="form-control" placeholder="রোগীর মোবাইল নম্বর">
                        </div>
                        <div class="form-group">
                            <label>জরুরী প্রয়োজনে জন্য বিকল্প নম্বর (ইংরাজি নম্বরঃ 01800000000)</label>
                            <input type="number" name="patient_ex_phone" class="form-control" placeholder="বিকল্প নম্বর">
                        </div>
                        <div class="form-group">
                            <label>রোগীর বয়স (ইংরাজি নম্বরঃ 27)</label>
                            <input type="text" name="patient_age" class="form-control" placeholder="রোগীর বয়স">
                        </div>
                        <div class="form-group">
                            <label for="">জেলা</label>
                                <select name="district_id" class="form-control">
                                    <option value="" >Select</option>
                                @foreach ($district as $row)
                                <option value="{{ $row->id }}">{{ $row->bn_name }}</option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group" style="position:relative;">
                            <label for="">উপজেলা</label>
                                <select name="upazila_id" class="form-control"></select>
                                <img  id="loader" src="image/loader.gif" alt="">
                        </div>
                        <div class="form-group">
                            <label>ইউনিয়ন</label>
                            <input type="text" name="union" class="form-control" placeholder="ইউনিয়ন">
                        </div>
                        <div class="form-group">
                            <label>এখন কী কী সমস্যা অনুভব করছেন/রোগ সম্পর্কে লিখুন</label>
                            <textarea name="current_disease" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>রোগীর বর্তমানে যে সব ঔষধ খাচ্ছেন</label>
                            <textarea  name="current_medicine" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>যদি ইতোপূর্বে কোন ডাক্তারের পরামর্শ নিয়ে থাকেন, তাহলে প্রেসক্রিপশন/ব্যবস্থাপত্র এর ছবি Upload করুন</label>
                            <input name="prescription_image" type="file">
                        </div>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                        </form>
                        
                      </div>
                  </div>
                    
              
          </div>
      </div>
      <script>
        $(document).ready(function(){
            var loader   =$('#loader'),
                district =$('select[name ="district_id"]'),
                upazila  =$('select[name ="upazila_id"]');

                loader.hide();
                upazila.attr("disabled", true);

            district.change(function(){
                var id = $(this).val();
                if (id){
                    loader.show();
                    upazila.attr("disabled", true);
                    $.ajax({
                            type: "GET",
                            url: "/upazilas?district_id="+id,
                            //$.get('{{url('/districts?district_id=')}}'+id)
                            success:(function(data){
                                var s ='<option value="">Select</option>';
                                data.forEach(function(row){
                                    s +='<option value="'+row.id+'" >'+row.bn_name+'</option>'
                                    console.log(s);
                                })
                                upazila.removeAttr('disabled',true);
                                upazila.html(s);
                                loader.hide();
                            })
                        });
                
                }
            });

        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
