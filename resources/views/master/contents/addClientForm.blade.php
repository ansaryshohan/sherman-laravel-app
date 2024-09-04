<form class="w-75 mx-auto pt-4" action="{{ url('/client') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    
    <div class="mb-2">
        <label for="exampleInputName1" class="form-label">Full Name</label>
        <input type="text" placeholder="your name" name="name" class="form-control" id="exampleInputName1"
            aria-describedby="nameHelp">
    </div>
    <div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
            placeholder="name@example.com">
    </div>
    <div class="mb-2">
        <label for="exampleInputPassword1" class="form-label">Mobile no</label>
        <input type="number" name="phone_no" class="form-control" id="exampleInputPassword1"
            placeholder="your phone no.">
    </div>
    <div class="mb-2">
        <label for="exampleInputFile1" class="form-label">Photo</label>
        <input type="file" name="client_image" class="form-control" id="exampleInputFile1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
