
<form action="{{ route('test') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="file" name="file" id="">
    <input type="submit" name="" id="">
</form>