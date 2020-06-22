$(document).ready(function(){

    var timeBy30 = [
        '9:00 AM', '9:30 AM',
        '9:30 AM', '10:00 AM', 
        '10:00 AM', '10:30 AM',
        '10:30 AM', '11:00 AM',
        '11:00 AM', '11:30 AM',
        '11:30 AM', '12:00 PM',
        '12:00 PM', '12:30 PM',
        '12:30 PM', '1:00 PM',
        '1:00 PM', '1:30 PM',
        '1:30 PM', '2:00 PM',
        '2:00 PM', '2:30 PM',
        '2:30 PM', '3:00 PM',
        '3:00 PM', '3:30 PM',
        '3:30 PM', '4:00 PM',
        '4:00 PM', '4:30 PM',
        '4:30PM', '5:00 PM'
    ];

    var timeBy1 = [
        '9:00 AM', '10:00 AM', 
        '9:30 AM', '10:30 AM',
        '11:00 AM', '12:00 PM',
        '11:30 AM', '12:30 PM',
        '12:00 PM', '1:00 PM',
        '12:30 PM', '1:30 PM',
        '1:00 PM', '2:00 PM',
        '1:30 PM', '2:30 PM',
        '2:00 PM', '3:00 PM',
        '2:30 PM', '3:30 PM',
        '3:00 PM', '4:00 PM',
        '3:30 PM', '4:30 PM',
        '4:00 PM', '5:00 PM',
    ];

    var timeBy3 = [
        '9:00 AM', '12:00 PM',
        '9:30 AM', '12:30 PM',
        '10:00 AM', '1:00 PM',
        '10:30 AM', '1:30 PM',
        '11:00 AM', '2:00 PM',
        '11:30 AM', '2:30 PM',
        '12:00 PM', '3:00 PM',
        '12:30 PM' , '3:30 PM',
        '1:00 PM', '4:00 PM',
        '1:30 PM', '4:30 PM',
        '2:00 PM', '5:00 PM'
    ]

    var timeTableClone = $('#timetable').clone();
    var counter = 0;
    var inccounter = 1;

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    $('.dropdown-item').on('click', function(){

        $('#timetable').replaceWith(timeTableClone.clone());
        counter = 0;
        inccounter = 1;
        var service = $(this).attr('data-service');
        var time = $(this).attr('data-time');        
        $('#dropdownServices').text(service);
        $('#userService').val(service);
        $('#userService').attr('data-time', time);


    });

    $('#userDate').on('change', function(){

        $('#timetable').replaceWith(timeTableClone.clone());
        counter = 0;
        inccounter = 1;
        var date = $(this).val();
        var time = $('#userService').attr('data-time');
        $.ajax({
            url: "check_if_full",
            method: "GET",
            data: {
                "date": date,
                "time": time
            },
            success: function(result){


                if(result == "FULL"){

                    console.log("Full");

                }

                else{

                    var time = $('#userService').attr('data-time');

                    if(time == 30){

                        $.each(timeBy30, function(){

                            $('#timetable').append('<input class="time-checkbox" type="checkbox" data-start="'+timeBy30[counter]+'" data-end="'+timeBy30[inccounter]+'"><label>'+timeBy30[counter] +' - '+timeBy30[inccounter]+'</label><br>');
                            if(counter == 30){

                               return false;

                            }
                            else{

                                counter += 2;
                                inccounter += 2;

                            }

                        });

                    }
                    else if(time == 60){

                        $.each(timeBy1, function(){

                            $('#timetable').append('<input class="time-checkbox" type="checkbox" data-start="'+timeBy1[counter]+'" data-end="'+timeBy1[inccounter]+'"><label>'+timeBy1[counter] +' - '+timeBy1[inccounter]+'</label><br>');
                            if(counter == 24){

                                return false;

                            }
                            else{

                                counter += 2;
                                inccounter +=2;

                            }
                        });

                    }
                    else{

                        $.each(timeBy3, function(){

                            $('#timetable').append('<input class="time-checkbox" type="checkbox" data-start="'+timeBy3[counter]+'" data-end="'+timeBy3[inccounter]+'"><label>'+timeBy3[counter] +' - '+timeBy3[inccounter]+'</label><br>');
                            if(counter == 20){

                                return false;

                            }
                            else{

                                counter += 2;
                                inccounter +=2;

                            }

                        });

                    }

                }
        
            }
        });

    });

    $(document).on("click", ".time-checkbox", function(){

        var start = $(this).attr('data-start');
        var end = $(this).attr('data-end');
        var date = $('#userDate').val();
        $.ajax({

            url: "check_if_taken",
            method: "GET",
            data: {
                "start": start,
                "end": end,
                "date": date
            },
            success: function(result){

                console.log(result);

            }
            
        });

    });

});