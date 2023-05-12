<!-- .............Stretching Outdoors............... -->
<div class="slot-wrapper py-3 px-3 my-4">
    <div class="slot-vertical-icon my-2 text-right">
        <img class="dot-toggle-icon-one" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
        <div class="icon-div icon-div-one box">
            <!-- <div class="icon-edit py-3 icon-div-inner editSlot" data-role="edit{{$data['index']}}">
                <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                <h1>Edit</h1>
            </div> -->
            <div class="icon-del py-3 icon-div-inner deleteSlot" data-role="delete{{$data['index']}}">
                <i class="fa fa-trash pr-2" aria-hidden="true"></i>

                <h1 class="">Delete</h1>
            </div>
        </div>
    </div>

    <div class=" slot-grid-container" id="appendImagesSlot">
        @foreach($data['images'] as $image)
        <div class="slot-grid-item">
            <div class="slot-image">
                <img src="{{$image}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
    <div class="slot-wrapper-heading px-3 my-3">
        <div class="left-slot-heading">
            <h1>{{$data['categoryName']}}</h1>
            <!-- <h2 class="pt-2">{{$data['subCategory']}}</h2> -->
        </div>
        <div class="right-slot-heading">
            <h1>{{$data['priceUnit']}} {{$data['price']}}</h1>
        </div>
    </div>
    <div class="slot-timing-stacks stack-timing-one">
        <div class="timing-stack timing-stack-one px-3 my-3">
            <div class="timing-stack-inner">
                <div class="week-name">
                    <h1>
                        @if($data['preference'] == 0)
                        {{$data['sessionDay']}}:
                        @else
                        {{$data['day']}}:
                        @endif
                    </h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">{{$data['startTime']}} to {{$data['endTime']}}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="stack-categories pb-2">
                <div class="row text-md-left text-center">
                    <div class="col-md-6">
                        <div class="w-100 d-md-flex align-items-center">
                            <h1>Difficulty Level:</h1>
                            <span>{{$data['difficulty']}}</span>
                        </div>
                        <div class="w-100 d-md-flex align-items-center">
                            <h1>Session Type:</h1>
                            <span>
                                @if($data['sessionType'] == 0)
                                One to One
                                @else
                                Group
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="w-100 d-md-flex align-items-center">
                            <h1>Class Type:</h1>
                            <span>
                                @if($data['type'] == 0)
                                Online
                                @else
                                In-Person
                                @endif
                            </span>
                        </div>
                        <div class="w-100 d-md-flex align-items-center">
                            <h1>Preference:</h1>
                            <span>
                                @if($data['preference'] == 0)
                                One Time
                                @else
                                Recurring
                                @endif
                            </span>
                        </div>

                    </div>
                    @if($data['preference'] == 0)
                    <div class="col-md-6">
                        <div class="w-100 d-md-flex align-items-center">
                            <h1>Date:</h1>
                            <span>
                                {{$data['sessionDate']}}
                            </span>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
    <div class="col-12">
        <div class="slot-arrow slot-arrow-one text-center">
            <i class="fa fa-angle-double-down down-arrow" aria-hidden="true"></i>
            <i class="fa fa-angle-double-up up-arrow" aria-hidden="true"></i>
        </div>
    </div>



</div>

<script>
    $(document).ready(function() {
        $('.limit-box').hide();
        $('#typeselector').change(function() {
            var selectValue = $(this).val();
            if (selectValue == "group") {
                $('.limit-box').show();
            } else {
                $('.limit-box').hide();
            }
        });

    });
    // edit and delete 
    // show and hide
    // one
    $('.icon-div-one').hide();
    $('.dot-toggle-icon-one').click(function() {
        $(this).siblings('.icon-div-one').show();
        $(this).siblings('.icon-div-two').hide();
    });
    $('.icon-div-one').mouseleave(function() {
        $('.icon-div-one').hide();
    });
    // two
    $('.icon-div-two').hide();
    $('.dot-toggle-icon-two').click(function() {
        $('.icon-div-two').show();
        $('.icon-div-one').hide();
    });
    $('.icon-div-two').mouseleave(function() {
        $('.icon-div-two').hide();
    });
    $(document).mouseup(function(e) {
        var container = $(".box");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });
    // time slot
    // show and hide
    // one
    $('.stack-timing-one').hide();
    $('.slot-arrow-one .up-arrow').hide();
    $('.slot-arrow-one .down-arrow').click(function() {
        const cardBody = $(this).closest('.slot-wrapper').find('.stack-timing-one');
        const dropIcon = $(this).closest('.slot-wrapper').find('.slot-arrow-one .up-arrow');
        const upIcon = $(this).closest('.slot-wrapper').find('.slot-arrow-one .down-arrow');
        cardBody.show(1000);
        dropIcon.show(1000);
        upIcon.hide(1000);

        // $('.stack-timing-one').show(1000);
        // $('.slot-arrow-one .up-arrow').show(1000);
        // $('.slot-arrow-one .down-arrow').hide(1000);

    });
    $('.slot-arrow-one .up-arrow').click(function() {
        const cardBody = $(this).closest('.slot-wrapper').find('.stack-timing-one');
        const dropIcon = $(this).closest('.slot-wrapper').find('.slot-arrow-one .up-arrow');
        const upIcon = $(this).closest('.slot-wrapper').find('.slot-arrow-one .down-arrow');
        cardBody.hide(1000);
        dropIcon.hide(1000);
        upIcon.show(1000);
        // $('.stack-timing-one').hide(1000);
        // $('.slot-arrow-one .up-arrow').hide(1000);
        // $('.slot-arrow-one .down-arrow').show(1000);
    });
    // two
    $('.stack-timing-two').hide();
    $('.slot-arrow-two .up-arrow').hide();
    $('.slot-arrow-two .down-arrow').click(function() {
        $('.stack-timing-two').show(1000);
        $('.slot-arrow-two .up-arrow').show(1000);
        $('.slot-arrow-two .down-arrow').hide(1000);
    });
    $('.slot-arrow-two .up-arrow').click(function() {
        $('.stack-timing-two').hide(1000);
        $('.slot-arrow-two .up-arrow').hide(1000);
        $('.slot-arrow-two .down-arrow').show(1000);
    });
</script>