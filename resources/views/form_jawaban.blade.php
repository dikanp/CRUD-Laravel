@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Jawaban</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{asset('jawaban/'.$pertanyaan_id)}}" method ="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Jawaban</label>
                    <input type="text" class="form-control" name="isi" placeholder="Jawaban Pertanyaan">
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="pertanyaan_id" placeholder="Jawaban Pertanyaan" value="{{$pertanyaan_id}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </div>
@endsection