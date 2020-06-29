$(document).ready(function () {

    var start;
    var end;
    var timeBy30 = [
        ['9:00 AM', '9:30 AM'],
        ['9:30 AM', '10:00 AM'],
        ['10:00 AM', '10:30 AM'],
        ['10:30 AM', '11:00 AM'],
        ['11:00 AM', '11:30 AM'],
        ['11:30 AM', '12:00 PM'],
        ['12:00 PM', '12:30 PM'],
        ['12:30 PM', '1:00 PM'],
        ['1:00 PM', '1:30 PM'],
        ['1:30 PM', '2:00 PM'],
        ['2:00 PM', '2:30 PM'],
        ['2:30 PM', '3:00 PM'],
        ['3:00 PM', '3:30 PM'],
        ['3:30 PM', '4:00 PM'],
        ['4:00 PM', '4:30 PM'],
        ['4:30 PM', '5:00 PM']
    ];

    var timeBy1 = [
        ['9:00 AM', '10:00 AM'],
        ['11:00 AM', '12:00 PM'],
        ['12:00 PM', '1:00 PM'],
        ['1:00 PM', '2:00 PM'],
        ['2:00 PM', '3:00 PM'],
        ['3:00 PM', '4:00 PM'],
        ['4:00 PM', '5:00 PM'],
    ];

    var timeBy3 = [
        ['9:00 AM', '12:00 PM'],
        ['12:00 PM', '2:00 PM'],
        ['2:00 PM', '5:00 PM']
    ]

    var timeTableClone = $('#timetable').clone();
    var counter = 0;
    var inccounter = 1;

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    $('.dropdown-item').on('click', function () {

        $('#timetable').replaceWith(timeTableClone.clone());
        counter = 0;
        inccounter = 1;
        var service = $(this).attr('data-service');
        var time = $(this).attr('data-time');
        $('#dropdownServices').text(service);
        $('#userService').val(service);
        $('#userService').attr('data-time', time);

        var date = $('#userDate').val();
        var slot = $('#userSlot').val();

        if(date != ""){

            $.ajax({
                url: "check_if_full",
                method: "GET",
                data: {
                    "date": date,
                    "time": time,
                    "slot": slot
                },
                success: function (result) {
    
                    if (result == "FULL") {
    
                        console.log("Full");
    
                    }
    
                    else {
    
                        var time = $('#userService').attr('data-time');
                        if (time == 30) {
    
                            $.each(timeBy30, function (key, val) {
    
                                let time = result.find(e => (e.appointment_time_start === val[0]));
                                if (!time) {
    
                                    let checker = false;
                                    $.each(result, function (row, item) {
                                        let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                        let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                        
                                        let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                        let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();
    
                                        if(start <= startVal && endVal <= end) checker = true;
                                    });
    
                                    if (!checker) {
                                        $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                    }
                                }
    
                            });
    
                        }
                        else if (time == 60) {
    
                            $.each(timeBy1, function (key, val) {
    
                                let time = result.find(e => (e.appointment_time_start === val[0]));
                                if (!time) {
    
                                    let checker = false;
                                    $.each(result, function (row, item) {
                                        let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                        let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                        
                                        let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                        let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();
    
                                        if(start <= startVal && endVal <= end) checker = true;
                                    });
    
                                    if (!checker) {
                                        $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                    }
                                }
    
                            });
    
                        }
                        else {
    
                            $.each(timeBy3, function (key, val) {
    
                                let time = result.find(e => (e.appointment_time_start === val[0]));
                                if (!time) {
    
                                    let checker = false;
                                    $.each(result, function (row, item) {
                                        let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                        let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                        
                                        let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                        let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();
    
                                        if(start <= startVal && endVal <= end) checker = true;
                                    });
    
                                    if (!checker) {
                                        $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                    }
                                }
    
                            });
    
                        }
    
                    }
    
                }
            });

        }
        else{

            console.log('No date selected');

        }


    });

    $('#userDate').on('change', function () {

        $('#timetable').replaceWith(timeTableClone.clone());
        counter = 0;
        inccounter = 1;
        var date = $(this).val();
        var time = $('#userService').attr('data-time');
        var slot = $('#userSlot').val();
        $.ajax({
            url: "check_if_full",
            method: "GET",
            data: {
                "date": date,
                "time": time,
                "slot": slot
            },
            success: function (result) {

                if (result == "FULL") {

                    console.log("Full");

                }

                else {

                    var time = $('#userService').attr('data-time');
                    if (time == 30) {

                        $.each(timeBy30, function (key, val) {

                            let time = result.find(e => (e.appointment_time_start === val[0]));
                            if (!time) {

                                let checker = false;
                                $.each(result, function (row, item) {
                                    let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                    let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                    
                                    let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                    let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();

                                    if(start <= startVal && endVal <= end) checker = true;
                                });

                                if (!checker) {
                                    $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                }
                            }

                        });

                    }
                    else if (time == 60) {

                        $.each(timeBy1, function (key, val) {

                            let time = result.find(e => (e.appointment_time_start === val[0]));
                            if (!time) {

                                let checker = false;
                                $.each(result, function (row, item) {
                                    let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                    let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                    
                                    let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                    let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();

                                    if(start <= startVal && endVal <= end) checker = true;
                                });

                                if (!checker) {
                                    $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                }
                            }

                        });

                    }
                    else {

                        $.each(timeBy3, function (key, val) {

                            let time = result.find(e => (e.appointment_time_start === val[0]));
                            if (!time) {

                                let checker = false;
                                $.each(result, function (row, item) {
                                    let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                    let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                    
                                    let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                    let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();

                                    if(start <= startVal && endVal <= end) checker = true;
                                });

                                if (!checker) {
                                    $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                }
                            }

                        });

                    }

                }

            }
        });

    });

    $('.tablinks').click(function(){
        
        $('#timetable').replaceWith(timeTableClone.clone());
        $('.tablinks').each(function(){

            $(this).removeClass('modal-appointment-btn1');
            $(this).addClass('modal-appointment-btn2')

        });
        $(this).removeClass('modal-appointment-btn2');
        $(this).addClass('modal-appointment-btn1');
        var data = $(this).attr('data-val');
        $('#userSlot').val(data);

        var date = $('#userDate').val();
        var slot = $('#userSlot').val();
        var time = $('#userService').attr('data-time');

        $.ajax({
            url: "check_if_full",
            method: "GET",
            data: {
                "date": date,
                "time": time,
                "slot": slot
            },
            success: function (result) {

                if (result == "FULL") {

                    console.log("Full");

                }

                else {

                    var time = $('#userService').attr('data-time');
                    if (time == 30) {

                        $.each(timeBy30, function (key, val) {

                            let time = result.find(e => (e.appointment_time_start === val[0]));
                            if (!time) {

                                let checker = false;
                                $.each(result, function (row, item) {
                                    let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                    let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                    
                                    let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                    let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();

                                    if(start <= startVal && endVal <= end) checker = true;
                                });

                                if (!checker) {
                                    $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                }
                            }

                        });

                    }
                    else if (time == 60) {

                        $.each(timeBy1, function (key, val) {

                            let time = result.find(e => (e.appointment_time_start === val[0]));
                            if (!time) {

                                let checker = false;
                                $.each(result, function (row, item) {
                                    let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                    let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                    
                                    let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                    let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();

                                    if(start <= startVal && endVal <= end) checker = true;
                                });

                                if (!checker) {
                                    $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                }
                            }

                        });

                    }
                    else {

                        $.each(timeBy3, function (key, val) {

                            let time = result.find(e => (e.appointment_time_start === val[0]));
                            if (!time) {

                                let checker = false;
                                $.each(result, function (row, item) {
                                    let start = new Date(`${item.appointment_date} ${item.appointment_time_start}`).getTime();
                                    let end = new Date(`${item.appointment_date} ${item.appointment_time_end}`).getTime();
                                    
                                    let startVal = new Date(`${item.appointment_date} ${val[0]}`).getTime();
                                    let endVal = new Date(`${item.appointment_date} ${val[1]}`).getTime();

                                    if(start <= startVal && endVal <= end) checker = true;
                                });

                                if (!checker) {
                                    $('#timeSelector').append('<option class="time-option" data-start="' + val[0] + '" data-end="' + val[1] + '" value="'+val[0]+'-'+val[1]+'">'+val[0]+' - '+val[1]+'</option>');
                                }
                            }

                        });

                    }

                }

            }
        });

    })

    $('#submitAppointment').click(function(){
        var name = $('#userName').val();
        var phone = $('#userPhone').val();
        var email = $('#userEmail').val();
        var service = $('#userService').val();
        var date = $('#userDate').val();
        var slot = $('#userSlot').val();
        var data = $('#timeSelector').val();
        var time = data.split('-');
        var start = time[0];
        var end = time[1];
        var minutes = $('#userService').attr('data-time');
        
        $.ajax({

            url: "save_appointment",
            method:"POST",
            data: {
                "name": name,
                "phone": phone,
                "email": email,
                "service": service,
                "date": date,
                "slot": slot,
                "start": start,
                "end": end,
                "time": minutes
            },
            success: function(result){

                $('#alertArea').removeClass('hide');
                $('#alertArea').addClass('show');

            }

        });

    });

});