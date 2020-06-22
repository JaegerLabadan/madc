
    document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');
      
              var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid', 'interaction', 'timeGrid', 'list' ],
    
                header:{
                  left: 'Mibutton title ',
                  // center:'dayGridMonth,timeGridWeek,timeGridDay,timeGridYear',
                  right: 'prev,today,next '
                }
                ,
    
                customTitle:{
    
                  Mibutton:{
                    text:"Button"
                  }
                },
    
                dateClick:function(info){
    
                  $('#txtDate').val(info.dateStr);
    
                  $('#exampleModal').modal();
                  // calendar.addEvent({ title:"Event", date:info.dateStr });
                },
                eventClick:function(info) {
    
                  console.log(info.event.title);
                  console.log(info.event.start);
                  console.log(info.event.extendedProps.description);
                  
                },
                
                // events:[
                //   {
                //     title:"awtsu",
                //     start:"2020-05-22 12:30:00",
                //     description:"navi is back"
                //   }
                // ]
                events:"{{ url('/event/show' )}}"
    
    
              });
      
              calendar.render();
    
              $('#btnAdd').click(function(){
                ObjEvent=gatherDataGUI('POST');
                SendEvent('',ObjEvent);
              })
    
              function gatherDataGUI(method){
    
                newEvent={
                  
                  title:$('#txtTitle').val(),
                  description:$('#txtDescription').val(),
                  start:$('#txtDate').val()+" "+$('#txtHour').val(),
                  end:$('#txtDate').val()+" "+$('#txtHour').val(),
                  '_token':$("meta[name='csrf-token']").attr("content"),
                  '_method':method
                }
                return (newEvent);
              }
    
              function SendEvent(action,objEvent){
    
                $.ajax(
                  {
                  type:"POST",
                  url:"{{ url('/event') }}"+action,
                  data:objEvent,
                  success:function(msg){ console.log(msg);} ,
                  error:function(){ alert("error found");}
                  }
                );
    
              }
    
            });
    
