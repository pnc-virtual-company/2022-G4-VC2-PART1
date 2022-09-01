<body style="font-family: Arial; margin: 0; font-size: 20px">
  <table style=" background-color: #f3f3f5; padding: 16px 12px; min-height: 50vh; width: 80%; margin: 0 auto; " >
     <tbody>
        <tr>
           <td style="vertical-align: top">
              <table border="0" width="600" cellpadding="0" cellspacing="0" align="center" style=" width: 600px !important; min-width: 600px !important; max-width: 600px !important; margin: auto; border-spacing: 0; border-collapse: collapse; background: white; border-radius: 8px; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 30px; display: block; " >
                 <tbody>
                    <tr>
                       <td style=" text-align: center; vertical-align: top; border-collapse: collapse; " >
                          <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#F8F8F8" style="border-spacing: 0; border-collapse: collapse" >
                             <tbody>
                                <tr style="background-size: cover">
                                   <td style=" width: 60%; text-align: left; border-collapse: collapse; background: #fff; border-radius: 10px 10px 0px 0px; color: white; height: 50px; " > <img src="https://www.passerellesnumeriques.org/misc/logo-en.png" width="120px" class="CToWUd"/> </td>
                                   <td style=" width: 40%; text-align: right; border-collapse: collapse; background: #fff; border-radius: 10px 10px 0px 0px; color: white; height: 50px; " >
                                      <div style="color: #828282; font-size: 14px"> {{date("F j, Y, g:i a")}} </div>
                                   </td>
                                </tr>
                             </tbody>
                          </table>
                       </td>
                    </tr>
                    <tr>
                       <td style="vertical-align: top; border-collapse: collapse">
                          <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#F8F8F8" style="border-spacing: 0; border-collapse: collapse" >
                             <tbody style="font-size: 14px;">
                                <tr>
                                   <td style=" padding-top: 30px; padding-bottom: 5px; background-color: white; " > <span style="color: #363636" >Dear <b>{{ $details['first_name'] }} {{ $details['last_name'] }},</b></span > </td>
                                </tr>
                                <tr>
                                   <td style=" padding-top: 5px; padding-bottom: 9px; background-color: white; " > 
                                    <span style="color: #363636;" >
                                       Your leave request on SLMS (Student Leave Management System) has been 
                                       <?php 
                                          if($details['status']=='Rejected'){
                                             echo "<span style='color: #FF0000; font-weight: bolder;'>" . $details['status'] . "</span>";
                                          }else{
                                             echo "<span style='color: #039487; font-weight: bolder;'>" . $details['status'] . "</span>";
                                          }
                                       ?>
                                       by your teacher.
                                    </span > 
                                   </td>
                                </tr>

                                <tr>
                                   <td style="background: #ffffff; height: 20px">
                                    <button style=" border-radius: 2px; margin-top: 10px; border: none; background: #0000FF; padding: 10px;">
                                      <a href="{{ $details['linkTo'] }}" style=" border-radius: 2px; margin-top: 10px; border: none; color: #fff; padding: 10px; text-decoration: none;">View more</a>
                                    </button>
                                  </td>
                                </tr>
                                <tr>
                                   <td style="background: #ffffff; height: 20px"></td>
                                </tr>
                                <tr>
                                   <td bgcolor="#F8F8F8" style=" border-radius: 8px !important; border-collapse: collapse; " ></td>
                                </tr>
                             </tbody>
                          </table>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </td>
        </tr>
     </tbody>
  </table>
 </body>