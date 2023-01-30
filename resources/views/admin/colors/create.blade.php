@extends('layouts.admin')

@section('content')
    <h1>Create Category</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{ route('admin.colors.store') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="hex_value" class="form-label">hex_value</label>
                    <input type="text" class="form-control @error('hex_value') is-invalid @enderror" id="hex_value" 
                    
                        name="hex_value" required maxlength="100" minlength="3">
                    
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                    
                        name="name" required maxlength="100" minlength="3">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* Minimo 3 caratteri e massimo 100 caratteri</div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
