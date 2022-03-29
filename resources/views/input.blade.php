<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Confirmation</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Formulir Rekam Medis</h3>
                            <br/>

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                                        @error('name')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="name">Name</label>
                                            @foreach ($pasiens as $pasien)
                                                <option value="{{ $pasien->id }}"> {{ $pasien->nama }}"</option>">
                                            @endforeach
                                        </label>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="KondisiKesehatan">Kondisi Kesehatan</label>
                                        <input type="text" class="form-control" id="KondisiKesehatan" name="KondisiKesehatan" value="{{ old('KondisiKesehatan') }}" class="@error('KondisiKesehatan') is-invalid @enderror">
                                        @error('KondisiKesehatan')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Suhu Tubuh</label>
                                        <input type="text" class="form-control" id="SuhuTubuh" name="SuhuTubuh" value="{{ old('SuhuTubuh') }}" class="@error('SuhuTubuh') is-invalid @enderror">
                                        @error('SuhuTubuh')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nftfile">Resep</label>
                                        <input type="file" class="form-control-file" id="Resep" name="Resep" value="{{ old('Resep') }}">
                                    </div>
                                    @error('Resep')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>