show_events();
function show_events()
{

   $.ajax({
        url  : '/Church/Upcoming_events/show_events',
        type : 'POST',
        beforeSend : function(xhr){
          
              
        },
        success : function(data){
           //$("#events_view").html(data);
        }
  });
}