@extends('layouts.master')

@section('title', 'Applicant Page')

@section('content-head')
    Biodata Applicant
@endsection

@section('content-body')
    @isset($dc)
        {{ $dc }}
    @endisset

    @isset($nama)
        User Profile of {{ $nama }}
        
        <div id="detail">
        </div>

        <div id="hobi">
        </div>

        <script>
            const detail = document.getElementById('detail');
            detail.innerText = 'loading data user...';
            fetch('./detail')
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) {                
                detail.innerText = JSON.stringify(myJson[{{ $nama - 1 }}]);
                //console.log(JSON.stringify(myJson));
            });

            const hobi = document.getElementById('hobi');
            hobi.innerText = 'loading data hobi user...';            
            fetch('./hobi')
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) {                
                hobi.innerText = JSON.stringify(myJson[{{ $nama - 1 }}]);
                //console.log(JSON.stringify(myJson));
            });
        </script>
        
        
        
        <p>
        -- detail content will be here... --\
        </p>
    @endisset

    @isset($wl)
        <br />
        <br />
        Wish List:
        @foreach($wl as $x)
            <div>{{ $x }}</div>
        @endforeach
    @endisset
@endsection
