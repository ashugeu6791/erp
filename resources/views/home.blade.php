<!-- TODO: Names and Icons to be fetched from DB
    Kunal Aaryen Sinha
    - 8709162797
-->
@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row pt-5">
    @if((Auth::user()->UserType) == '1')
            <div class="col-2"  >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center;">
                        <i class="fas fa-users pb-4" style="font-size:70px;color:red;" aria-hidden="true"></i>
                        <h4 class=" pb-1 text-center text-dark"><strong>Discussion</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="{{ url('/exam') }}" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-file-alt pb-4" style="font-size:70px;color:orange; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Exam</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-calendar-alt pb-4" style="font-size:70px;color:navy; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Calendar</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="far fa-comments pb-4" style="font-size:70px;color:green; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Meetings</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="far fa-address-book pb-4" style="font-size:70px;color:black; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Contacts</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="far fa-handshake pb-4" style="font-size:70px;color:blue; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>CRM</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-globe-asia pb-4" style="font-size:70px;color:purple; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Website</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-cat pb-4" style="font-size:70px;color:black; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>OpenEduCat</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-book pb-4" style="font-size:70px;color:blue; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Course</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-user-graduate pb-4" style="font-size:70px;color:navy; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Alumni</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-chalkboard-teacher pb-4" style="font-size:70px;color:maroon; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Faculties</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-question-circle pb-4" style="font-size:70px;color:orange; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Quiz</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-desktop pb-4" style="font-size:70px;color:black; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>LMS</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-list-ul pb-4" style="font-size:70px;color:blue; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Attendence</strong></h4>
                    </div>
                </a>
            </div>
        </div>
    @elseif((Auth::user()->UserType) == '3')
    <div class="col-2"  >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-users pb-4" style="font-size:70px;color:red; aria-hidden="true"></i>
                        <h4 class=" pb-1 text-center text-dark"><strong>Discussion</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="{{ url('/exam') }}" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-file-alt pb-4" style="font-size:70px;color:orange; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Exam</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-calendar-alt pb-4" style="font-size:70px;color:navy; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Calendar</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="far fa-comments pb-4" style="font-size:70px;color:green; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Meetings</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="far fa-address-book pb-4" style="font-size:70px;color:black; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Contacts</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-globe-asia pb-4" style="font-size:70px;color:purple; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Website</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-desktop pb-4" style="font-size:70px;color:black; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>LMS</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-list-ul pb-4" style="font-size:70px;color:blue; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Attendence</strong></h4>
                    </div>
                </a>
            </div>
        </div>
    @elseif((Auth::user()->UserType) == '2')
            <div class="col-2" >
                <a href="{{ url('/exam') }}" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-file-alt pb-4" style="font-size:70px;color:orange; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Exam</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-calendar-alt pb-4" style="font-size:70px;color:navy; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Calendar</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-globe-asia pb-4" style="font-size:70px;color:purple; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Website</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-cat pb-4" style="font-size:70px;color:black; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>OpenEduCat</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-book pb-4" style="font-size:70px;color:blue; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Course</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-chalkboard-teacher pb-4" style="font-size:70px;color:maroon; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Faculties</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-question-circle pb-4" style="font-size:70px;color:orange; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Quiz</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-desktop pb-4" style="font-size:70px;color:black; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>LMS</strong></h4>
                    </div>
                </a>
            </div>
            <div class="col-2" >
                <a href="#" aria-label="Tile" style="text-decoration:none">
                    <div class="card-body bg-white w-100 rounded shadow-lg p-3 mb-5 bg-white rounded" style="height:auto;text-align:center">
                        <i class="fas fa-list-ul pb-4" style="font-size:70px;color:blue; aria-hidden="true"></i>
                        <h4 class="pb-1 text-center text-dark"><strong>Attendence</strong></h4>
                    </div>
                </a>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection
