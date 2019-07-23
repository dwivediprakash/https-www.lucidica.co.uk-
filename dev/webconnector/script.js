(function() {
  // Create the connector object
  var myConnector = tableau.makeConnector();

  // Define the schema
  myConnector.getSchema = function(schemaCallback) {
    var cols = [
    {
      id: 'date',
      alias: 'date',
      dataType: tableau.dataTypeEnum.date
    },
    {
      id: 'website_name',
      alias: 'website_name',
      dataType: tableau.dataTypeEnum.string
    },
    {
      id: 'dimension_chats_per_triggers_via_chat',
      alias: 'dimension_chats_per_triggers_via_chat',
      dataType: tableau.dataTypeEnum.string
    },
    {
      id: 'dimension_tag_name',
      alias: 'dimension_tag_name',
      dataType: tableau.dataTypeEnum.string
    },
    {
      id: 'A1contacts_via_chat',
      alias: 'A1contacts_via_chat',
      dataType: tableau.dataTypeEnum.int
    },
    {
      id: 'A1triggered_via_chat',
      alias: 'A1triggered_via_chat',
      dataType: tableau.dataTypeEnum.int
    },
    {
      id: 'A1displays_via_chat',
      alias: 'A1displays_via_chat',
      dataType: tableau.dataTypeEnum.int
    },
    {
      id: 'A1simultaneous_contact',
      alias: 'A1simultaneous_contact',
      dataType: tableau.dataTypeEnum.float
    },
    {
      id: 'A1contact_per_hour_via_chat',
      alias: 'A1contact_per_hour_via_chat',
      dataType: tableau.dataTypeEnum.float
    },
    {
      id: 'A1average_handling_time',
      alias: 'A1average_handling_time',
      dataType: tableau.dataTypeEnum.float
    },
    {
      id: 'A2satisfaction_global_rate_via_chat',
      alias: 'A2satisfaction_global_rate_via_chat',
      dataType: tableau.dataTypeEnum.float
    },
    {
      id: 'A2satisfaction_welcome_rate_via_chat',
      alias: 'A2satisfaction_welcome_rate_via_chat',
      dataType: tableau.dataTypeEnum.float
    },
    {
      id: 'A2satisfaction_delay_rate_via_chat',
      alias: 'A2satisfaction_delay_rate_via_chat',
      dataType: tableau.dataTypeEnum.float
    },
    {
      id: 'A2satisfaction_response_time_via_chat',
      alias: 'A2satisfaction_response_time_via_chat',
      dataType: tableau.dataTypeEnum.float
    },
    {
      id: 'A2satisfaction_respondent_number_via_chat',
      alias: 'A2satisfaction_respondent_number_via_chat',
      dataType: tableau.dataTypeEnum.int
    },
    {
      id: 'A2satisfaction_respondent_rate_via_chat',
      alias: 'A2satisfaction_respondent_rate_via_chat',
      dataType: tableau.dataTypeEnum.float
    },
    {
      id: 'A3contacts_via_fbmessenger',
      alias: 'A3contacts_via_fbmessenger',
      dataType: tableau.dataTypeEnum.int
    },
    {
      id: 'A3received_messages_via_fbmessenger',
      alias: 'A3received_messages_via_fbmessenger',
      dataType: tableau.dataTypeEnum.int
    },
    {
      id: 'A3sent_messages_via_fbmessenger',
      alias: 'A3sent_messages_via_fbmessenger',
      dataType: tableau.dataTypeEnum.int
    },
    {
      id: 'A3contacts_no_response_via_fbmessenger',
      alias: 'A3contacts_no_response_via_fbmessenger',
      dataType: tableau.dataTypeEnum.int
    }];

    var tableSchema = {
      id: "iAdvize",
      alias: "Statistic of chats imported from iAdvize",
      columns: cols
    };

      schemaCallback([tableSchema]);
  };

  // Send variables to pushing data
  setupConnector = function() {
    var max_iterations = new Date( $( '#end-date' ).val() ),
    		min_iterations = new Date( $( '#start-date' ).val() ),
    		website_id = $( '#website' ).val(),
    		website_name = $( '#website option:selected' ).text(),
    		startDate = $( '#start-date' ).val(),
    		endDate = $( '#end-date' ).val();

		function getDayDelta( incomingDate, todayDate ) {
		  var incomingDate = new Date(incomingDate[0],incomingDate[1]-1,incomingDate[2]),
		      today = new Date(todayDate[0], todayDate[1]-1, todayDate[2]), delta;

		  today.setHours(0);
		  today.setMinutes(0);
		  today.setSeconds(0);
		  today.setMilliseconds(0);
		  today.setHours(0);
		  today.setMinutes(0);

		  delta = incomingDate - today;
		  return Math.round(delta / 1000 / 60 / 60/ 24);
		}

		var quant = getDayDelta( [endDate.split( '-' )[0],endDate.split( '-' )[1],endDate.split( '-' )[2]], [startDate.split( '-' )[0],startDate.split( '-' )[1],startDate.split( '-' )[2]] ) + 1;

    max_iterations = new Date( max_iterations.setDate( max_iterations.getDate() - 1 ) ).toISOString().substr( 0, 10 );
    min_iterations = new Date( min_iterations.setDate( min_iterations.getDate() - 1 ) ).toISOString().substr( 0, 10 );

     if (max_iterations) {
         var connectionData = {
            "max_iterations": max_iterations,
            "min_iterations": min_iterations,
            "website_id": website_id,
            "website_name": website_name,
            "quant": quant
         };
         tableau.connectionData = JSON.stringify(connectionData);
         tableau.submit();
     }
  };

  // Download the data
  myConnector.getData = function(table, doneCallback) {

    var connectionData = JSON.parse(tableau.connectionData),
    		max_iterations = connectionData.max_iterations,
    		min_iterations = connectionData.min_iterations,
    		website_id = connectionData.website_id,
    		website_name = connectionData.website_name,
    		quant = connectionData.quant;

    var endDate = new Date( max_iterations ),
        daysOfYear = [],
        d,
        d2 = new Date( min_iterations ),
        dateI = 0;

    dataArray = [];


    // Output data by date
    for ( d = new Date( min_iterations ); d <= endDate; d.setDate( d.getDate() + 1 ) ) {
      var currentDate = new Date( d ).toISOString().substring( 0, 10 ), 
          nextDate = new Date ( d2.setDate( d2.getDate() + 1 ) ).toISOString().substring( 0, 10 );
      dataArray.push({
      	'date': nextDate
      });
    }

    dataArray[0].website_name = website_name;

    var dateIChat = 0;
    for ( d = new Date( min_iterations ); d <= endDate; d.setDate( d.getDate() + 1 ) ) {
      var currentDate = new Date( d ).toISOString().substring( 0, 10 ), 
          nextDate = new Date ( d2.setDate( d2.getDate() + 1 ) ).toISOString().substring( 0, 10 );
      $.getJSON( "https://ha.iadvize.com/api/2/statistic?filters[channel]=chat&filters[website_id]="+ website_id +"&filters[indicators]=contact_answered_duration,contact_waiting_duration,contact_simultaneous_number,contact_number,contact_per_hour_number,satisfaction_welcome_rate,satisfaction_delay_rate,satisfaction_respondent_rate,satisfaction_global_rate,satisfaction_respondent_number,targeting_rule_triggered,rule_display_number&filters[from]=" + currentDate + "&filters[to]=" + nextDate + "&key=1913422185922c6bb83b85bba7ff4658", function( resp ) {
        var data = resp.data;
        dataArray[dateIChat].dimension_chats_per_triggers_via_chat = data.targeting_rule_triggered;
        dataArray[dateIChat].A1contact_per_hour_via_chat = data.contact_per_hour_number;
        dataArray[dateIChat].A1triggered_via_chat = data.targeting_rule_triggered;
        dataArray[dateIChat].A1contacts_via_chat = data.contact_number;
        dataArray[dateIChat].A1simultaneous_contact = data.contact_simultaneous_number;
        dataArray[dateIChat].A1average_handling_time = data.contact_waiting_duration;
        dataArray[dateIChat].A1displays_via_chat = data.rule_display_number;
        dataArray[dateIChat].A2satisfaction_global_rate_via_chat = data.satisfaction_global_rate;
        dataArray[dateIChat].A2satisfaction_welcome_rate_via_chat = data.satisfaction_welcome_rate;
        dataArray[dateIChat].A2satisfaction_delay_rate_via_chat = data.satisfaction_delay_rate;
        dataArray[dateIChat].A2satisfaction_response_time_via_chat = data.contact_answered_duration;
        dataArray[dateIChat].A2satisfaction_respondent_number_via_chat = data.satisfaction_respondent_number;
        dataArray[dateIChat].A2satisfaction_respondent_rate_via_chat = data.satisfaction_respondent_rate;
        dateIChat++; 
      });
    }

    var dateIfbmessenger = 0;
    for ( d = new Date( min_iterations ); d <= endDate; d.setDate( d.getDate() + 1 ) ) {
      var currentDate = new Date( d ).toISOString().substring( 0, 10 ), 
          nextDate = new Date ( d2.setDate( d2.getDate() + 1 ) ).toISOString().substring( 0, 10 );
      $.getJSON( "https://ha.iadvize.com/api/2/statistic?filters[channel]=facebookBusinessOnMessenger&filters[website_id]="+ website_id +"&filters[indicators]=contact_number,contact_received_message_number,contact_sent_message_number,contact_unanswered_number&filters[from]=" + currentDate + "&filters[to]=" + nextDate + "&key=1913422185922c6bb83b85bba7ff4658", function( resp ) {
        var data = resp.data;
        dataArray[dateIfbmessenger].A3contacts_via_fbmessenger = data.contact_number;
        dataArray[dateIfbmessenger].A3received_messages_via_fbmessenger = data.contact_received_message_number;
        dataArray[dateIfbmessenger].A3sent_messages_via_fbmessenger = data.contact_sent_message_number;
        dataArray[dateIfbmessenger].A3contacts_no_response_via_fbmessenger = data.contact_unanswered_number;
        dateIfbmessenger++; 
      });
    }

    // Push data 
    $.getJSON( "https://ha.iadvize.com/api/2/tag?filters[website_id]="+ website_id +"&limit=100&key=1913422185922c6bb83b85bba7ff4658", function( resp ) {
      var data = resp.data;

    	for ( var i = 0; i < quant; i++ ) {

    		$.ajax({
          type: 'GET',
          url: "https://ha.iadvize.com/api/2/tag/"+ data[i].id +"?filters[website_id]="+ website_id +"&key=1913422185922c6bb83b85bba7ff4658",
          async: false,
          dataType: 'json'
        }).done( function( resp ) {
          dataArray[i].dimension_tag_name = resp.data.name;
        });
    	}

      table.appendRows(dataArray);
      doneCallback();
    });
  };

  // Get list of websites
  $.ajax( {
    type: 'GET',
    url: 'https://ha.iadvize.com/api/2/website?key=1913422185922c6bb83b85bba7ff4658',
    async: true,
    dataType: 'json'
  } ).done( function( resp ) {
    var data = resp.data;
    alert(data);

    for ( i = 0; i < data.length; i++ ) {
      $( '#website' ).append( '<option class="'+ data[i].id +'" value="'+ data[i].id +'"></option>' );

      $.ajax( {
        type: 'GET',
        url: 'https://ha.iadvize.com/api/2/website/'+ data[i].id +'?key=1913422185922c6bb83b85bba7ff4658',
        async: false,
        dataType: 'json'
      } ).done( function( resp ) {
        $( 'option.'+ data[i].id +'').append( resp.data.label );
      } );
    }
    
  } );

  tableau.registerConnector(myConnector);

  // Create event listeners for when the user submits the form
  $(document).ready(function() {
    $( '#submitButton' ).click(function() {
      setupConnector();
    });
  });
})();
