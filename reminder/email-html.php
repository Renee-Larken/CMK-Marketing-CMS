<style> 
    body { 
        background-color: #00A5C7; 
    } 
</style> 
 
<!--Section--> 
<table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" 
       style="margin:30px auto 40px;display:block;padding:20px;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;"> 
    <tr> 
        <td valign="top" width="90" align="left" style="border-bottom:8px solid #98BB53;padding-bottom:10px;"> 
            <img src="http://cmapp.cmkmarketing.com/img/exclamation.png" alt="CMK Marketing" width="auto" height="40" 
                 style="margin-left:30px;margin-right:20px;"/> 
        </td> 
        <td valign="center" width="480" align="center" 
            style="border-bottom: 8px solid #98BB53;padding-bottom:10px;padding-right:30px;"> 
            <p style="color:#333333; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:25px; line-height:25px;margin:0;text-align:center;"> 
                Your CMS Reminder - Upcoming Due Dates!</p> 
        </td> 
    </tr> 
 
    <tr> 
        <td valign="top" align="left" width="560" style="padding:20px 10px;width:560px;border-bottom:8px solid #98BB53;" 
            colspan="2"> 
            <!-- Intro Text in Table --> 
            <p style="color:#333333; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px; line-height:20px;margin:0 0 15px 0;text-align:left;"> 
                <?php echo "Hi " . $user['FirstName'] . ' ' . $user['LastName'] . ','; ?> 
                <br/><br/> 
                This is an automated message from your friendly customer management system! It's come to my attention 
                that you have a few upcoming invoice/due dates. If any of the following have already been completed, 
                head over to <a href="http://cmapp.cmkmarketing.com" style="color: rgb(0, 122, 195);" target="_blank">the application</a> and update the necessary information! 
            </p> 
 
            <br/> 
 
            <!-- Due in a Week --> 
            <p style="color:#333333; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px; line-height:20px;margin:0 0 15px 0;text-align:left;"> 
                <strong>Due in the Next Week:</strong></p> 
            <ul style="padding-left:30px;margin:0 0 15px 0;"> 
                <?php if(count($one_week_clients) == 0): ?> 
                  <li style="padding-bottom:5px;color:#333333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;line-height:20px;text-align:left;"><em>No Upcoming Subscriptions/Projects</em></li> 
                <?php else: ?> 
                  <?php foreach($one_week_clients as $client): ?> 
                      <li style="padding-bottom:5px;color:#333333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;line-height:20px;text-align:left;"> 
                          <?php echo $client['Companyname'] ?> 
                           
                          <ul style="margin:10px 0 0 0;"> 
                              <?php if(count($one_week_subscriptions) != 0): ?> 
                                  <?php foreach($one_week_subscriptions[$client['Company_ID']] as $subscription): ?> 
                                      <li style="padding-bottom:5px;color:#333333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;line-height:20px;text-align:left;"> 
                                          <strong>Subscription:</strong> 
                                          <?php  
                                            $time = new DateTime($subscription['Annual_Renewal']); 
                                            echo $subscription['Site_Name']; 
                                            echo ', ' . $time->format('M. d, Y');  
                                        ?> 
                                      </li> 
                                  <?php endforeach; ?> 
                              <?php endif; ?> 
 
                              <?php if (count($one_week_projects) != 0): ?> 
                                  <?php foreach ($one_week_projects[$client['Company_ID']] as $project): ?> 
                                      <li style="padding-bottom:5px;color:#333333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;line-height:20px;text-align:left;"> 
                                          <strong>Project:</strong> 
                                          <?php 
                                            $time = new DateTime($project['End_Date']); 
                                            echo $project['ProjectName']; 
                                            echo ', ' . $time->format('M. d, Y'); 
                                        ?> 
                                      </li> 
                                  <?php endforeach; ?> 
                              <?php endif; ?> 
                          </ul> 
                      </li> 
                  <?php endforeach; ?> 
              <?php endif; ?> 
            </ul> 
 
            <br/> 
 
            <!-- Due in 2 Weeks --> 
            <p style="color:#333333; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px; line-height:20px;margin:0 0 15px 0;text-align:left;"> 
                <strong>Due in the Next 2 Weeks:</strong></p> 
            <ul style="padding-left:30px;margin:0 0 15px 0;"> 
              <?php if(count($two_weeks_client) == 0): ?> 
                  <li style="padding-bottom:5px;color:#333333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;line-height:20px;text-align:left;"><em>No Upcoming Subscriptions/Projects</em></li> 
                <?php else: ?> 
                  <?php foreach($two_weeks_client as $client): ?> 
                      <li style="padding-bottom:5px;color:#333333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;line-height:20px;text-align:left;"> 
                          <?php echo $client['Companyname'] ?> 
                           
                          <ul style="margin:10px 0 0 0;"> 
                              <?php if(count($two_weeks_subscriptions) != 0): ?> 
                                  <?php foreach($two_weeks_subscriptions[$client['Company_ID']] as $subscription): ?> 
                                      <li style="padding-bottom:5px;color:#333333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;line-height:20px;text-align:left;"> 
                                          <strong>Subscription:</strong> 
                                          <?php  
                                            $time = new DateTime($subscription['Annual_Renewal']); 
                                            echo $subscription['Site_Name']; 
                                            echo ', ' . $time->format('M. d, Y');  
                                        ?> 
                                      </li> 
                                  <?php endforeach; ?> 
                              <?php endif; ?> 
 
                              <?php if (count($two_weeks_projects) != 0): ?> 
                                  <?php foreach ($two_weeks_projects[$client['Company_ID']] as $project): ?> 
                                      <li style="padding-bottom:5px;color:#333333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;line-height:20px;text-align:left;"> 
                                          <strong>Project:</strong> 
                                          <?php 
                                            $time = new DateTime($project['End_Date']); 
                                            echo $project['ProjectName']; 
                                            echo ', ' . $time->format('M. d, Y'); 
                                        ?> 
                                      </li> 
                                  <?php endforeach; ?> 
                              <?php endif; ?> 
                          </ul> 
                      </li> 
                  <?php endforeach; ?> 
              <?php endif; ?> 
            </ul> 
 
            <br/> 
 
            <!-- Ending Message --> 
            <p style="color:#333333; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:13px; line-height:20px;margin:0;text-align:center;"> 
                <em>You will be sent additional emails on the subscriptions and/or projects listed here as 
                    necessary.</em></p> 
        </td> 
    </tr> 
</table> 
<!-- End Section-->