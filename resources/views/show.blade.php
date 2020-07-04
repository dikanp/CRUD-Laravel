@extends('layouts.master')

@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Items</h3><br/>
                <a href="{{asset('jawaban/create/'.$pertanyaan_id)}}" class="btn btn-primary">
                  Create New Jawaban
                </a>
                <a href="{{asset('pertanyaan')}}" class="btn btn-primary">
                  Back
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 5%">Id</th>
                      <th style="width: 25%">Isi</th>
                      <th style="width: 25%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($jawabans as $jawaban)
                    <tr>
                      <td>{{$jawaban->id}}</td>
                      <td>{{$jawaban->isi}}</td>
                      <td>
                            <span>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a> &nbsp; 
                                <a href="#"class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Are you sure want to delete this data?');"><i class="fa fa-trash"></i>
                                </a>
                            </span>
                        </td>
                    </tr>
                  @endforeach 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>>

@endsection