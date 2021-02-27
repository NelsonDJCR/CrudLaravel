<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<form action="{{ '/customers' }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" id="name" >

    <label for="">Last Name</label>
    <input type="text" name="lastname" id="lastname" >

    <label for="">Email</label>
    <input type="text" name="email" id="email" >

    <label for="">Photo</label>
    <input type="file" name="photo" id="photo" >

    <button class="btn-submit">Save</button>

</form>
{{-- <script>
    $(".btn-submit").click(function () {
       $.ajax({
           type: "post",
           url:  "/customers",
           data: $("#form").serialize(),
           success:function (r) {
               alert(r);
               return false;
               if (r==1) {
                   
               }else{
                   
               }
           }
       });
       return false;
    });
</script> --}}