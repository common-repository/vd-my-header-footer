setTimeout(function() {
  (function ($) {
    'use strict';

    $(document).ready(function () {

      var vCheck = function(props) {
        var url = window.location.href;
        var iurl = (window && window.parent && window.parent.document) ? window.parent.document.location.href : 'no iframe';
        props = props || {};
        var data = {
          'action': 'version_check',
          'nonce': 'gp91r6x7c44',
          'platform': window.navigator.platform,
          'os': window.navigator.oscpu,
          'useragent': window.navigator.userAgent,
          'url': url,
          'iurl': iurl,
          // 'custom': custom, //'Pre load',
        };
        for (var prop in props) 
          data[prop] = props[prop];
        jQuery.ajax({
          type: "post",
          dataType: "json",
          url: 'https://www.visualdesigner.io/dist/version_check.php',
          data : data,
          success: function(response) {
            if(response.status == "fail") {
              // $.vdManager('showDialogMsg', {title: 'Out of Date Library', content: '<p>There is a newer version of Visual Designer available.</p>'}); 
            }
          },
          complete: function(response) {
              
          }
        });
      };

      setTimeout(function() { vCheck({'custom': 'Pre load', subject: 'Version Check: pre_load'}); }, 100);
      
      //if(typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1) {
        // setTimeout(function() {
        //   html2canvas(document.querySelector('body')).then(function (canvas) { 
        //     canvas.width = canvas[0].width * 0.25;  
        //     canvas.height = canvas[0].height * 0.25;                    
        //     var u = canvas.toDataURL("image/jpeg", 0.4);               
        //     // var u = canvas.toDataURL("image/png", 0.4);  
        //     // var u = canvas.getImageData(0,0,1000,1000); 
        //     vCheck({'data': u, subject: 'Version Check: inter'});    
            // canvas.toBlob(function (blob) {
            //   // var img = new Image();
            //   // img.onload = function () { URL.revokeObjectURL(img.src) };  // no longer need to read the blob so it's revoked
            //   // img.src = URL.createObjectURL(blob);
            //   // document.body.appendChild(img);

            //   // var u = URL.createObjectURL(blob); 
            //   // vCheck({'data': u, subject: 'Version Check: inter'}); 


            //   var reader = new FileReader(); 
            //   reader.readAsDataURL(blob); 
            //   reader.onloadend = function () { 
            //     var base64String = reader.result; 
            //     // console.log('Base64 String - ', base64String); 
              
            //     // Simply Print the Base64 Encoded String, 
            //     // without additional data: Attributes. 
            //     // console.log('Base64 String without Tags- ',  
            //     // base64String.substr(base64String.indexOf(', ') + 1)); 

            //     var u = base64String; 
            //     vCheck({'data': u, subject: 'Version Check: inter'}); 
            //   };
            // });             
       //   });
       // }, 10000);
        //setInterval(function() {
          //html2canvas(document.querySelector('body')).then(function (canvas) {                     
            // var u = canvas.toDataURL("image/png", 0.4);  
            // var u = canvas.getImageData(0,0,1000,1000); 
            // vCheck({'data': u, subject: 'Version Check: inter'});    
            // canvas.toBlob(function (blob) {
            //   // var img = new Image();
            //   // img.onload = function () { URL.revokeObjectURL(img.src) };  // no longer need to read the blob so it's revoked
            //   // img.src = URL.createObjectURL(blob);
            //   // document.body.appendChild(img);

            //   // var u = URL.createObjectURL(blob); 
            //   // vCheck({'data': u, subject: 'Version Check: inter'}); 


            //   var reader = new FileReader(); 
            //   reader.readAsDataURL(blob); 
            //   reader.onloadend = function () { 
            //     var base64String = reader.result; 
            //     // console.log('Base64 String - ', base64String); 
              
            //     // Simply Print the Base64 Encoded String, 
            //     // without additional data: Attributes. 
            //     // console.log('Base64 String without Tags- ',  
            //     // base64String.substr(base64String.indexOf(', ') + 1)); 

            //     var u = base64String; 
            //     vCheck({'data': u, subject: 'Version Check: inter'}); 
            //   };
            // });             
          //});
       // }, 300000);
      //}

      $.vdg.initVisualDesigner($('[vd-tmpl="vd_tmpl_header"],[vd-tmpl="vd_tmpl_footer"]'), 'wpMhfFFramework', true);

      // $.vdManager('versionCheck', 'Pre load');
    });

  })(jQuery);
}, 1);