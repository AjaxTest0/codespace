@extends('index')



     @section('css')
      <link rel="stylesheet" href="{{asset('css/settings.css')}}">
      <link rel="stylesheet" href="{{asset('css/billing.css')}}">
      @endsection
     {{-- -------------------------------------------------------------------------------------- --}}

      @section('content')
      <div class="container text-justify">
        @foreach ($purposals as $purposal)
        <div class="row d-flex justify-content-around">
            <div class="col-8  p-3">
              <div class="card p-5 shadow">
                <span>
                  <strong> I purpose that :</strong>
                </span>
                <br>
                <br>
                <span class="m-3 py-3">{{$purposal->purposal}}</span>
                <br>
                <br>
                <hr class="border-bottom"> 
                <span class="text-success clearfix">
                  <b>
                    By {{$purposal->profile->first_name}}
                  </b>
                </span>
                <span class="clearfix">
                  <strong class="text-dark">
                    Status
                  </strong>
                  {{$purposal->status ?? 'Pending' }}
                  <form action="{{route('accept_job',[$purposal,'accepted'])}}">
                    <button type="submit" class="btn btn-outline-success float-right mx-1">Accept</button>
                  </form>
                  <form action="{{route('accept_job',[$purposal,'cancelled'])}}">
                    <button class="btn btn-outline-danger float-right mx-1">Reject</button>
                  </form>
                  <form action="{{route('accept_job',[$purposal,'interview'])}}">
                    <button class="btn btn-outline-primary float-right mx-1">Have Interview</button>
                  </form>
                </span>
              </div>
            </div>
        </div>

        @endforeach
      </div>
      @endsection

     {{-- -------------------------------------------------------------------------------------- --}}
@section('js')

@endsection