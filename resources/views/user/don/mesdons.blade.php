{{--@foreach($userProjects->projects as $userProject)--}}
    <div class="col-md-12 mt-3">
        <div class="card">
            <div class="justify-content-between">
                <div class="card-header">
                    <h5>
                        {{--{{$userProject->name}}--}}
                        {{--de {{ $userProject->user->lastname }}--}}
                    </h5>
                </div>


                <div class="card-body">

                    <p class="card-text">
                        {{--{{$userProject->description}}--}}
                    </p>
                </div>


            </div>
        </div>
    </div>
{{--@endforeach--}}
