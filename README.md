# e-Dormitory
e-Dormitory is a dormitory management system developed based on the **Laravel** framework, primarily offering the following functions:

**(1) Check-in Procedures**: <br>
&emsp; &ensp;This function provides a convenient method for the community center to handle student check-in, including:<br>
&emsp; &emsp; • room allocation according to specified rules <br>
&emsp; &emsp; • updating student information <br>
&emsp; &emsp; • modifying room information (occupying a bed) <br>
&emsp; &emsp; • creating room card (without activation) <br>
&emsp; &emsp; • issuing accommodation fee notifications <br>
&emsp; &ensp; It supports batch processing, allowing the community center to upload a student list (in standardized format), <br>
&emsp; &ensp; automatically process check-in for all listed students and generate a final allocation report. <br>

**(2) Check-out Procedures**: <br>
&emsp; &ensp;This function handles the check-out process for graduates or students applying to leave the dormitory, including:<br> 
&emsp; &emsp; • freeing up the beds in the original room <br>
&emsp; &emsp; • deactivating room cards <br>
&emsp; &emsp; • updating student information <br>

**(3) Room Transfers**: <br>
&emsp; &ensp;This function allows the community center to process room transfers for residents, including:<br> 
&emsp; &emsp; • ensuring the target room complies with regulations <br>
&emsp; &emsp; • freeing up beds in the original room <br>
&emsp; &emsp; • modifying target room information (occupying a bed) <br>
&emsp; &emsp; • updating student information <br>

**(4) Room Information Management**: <br>
&emsp; &ensp;This includes managing details such as building number, room number, bed count, and the list of current <br> 
&emsp; &ensp;residents along with their information (student ID, gender, year level...etc) <br>

**(5) Accommodation Fee Management**: <br>
&emsp; &ensp; • Students can pay the accommodation fees for the current academic year and view their payment history. <br>
&emsp; &ensp; • The community center has the authority to issue payment notifications to students. <br>

**(6) Equipment Repair Management**: <br>
&emsp; &ensp; • Provides a channel for students to submit equipment repair requests. <br>
&emsp; &ensp; • The property management team can review and respond to these requests with detailed information on <br> 
&emsp; &emsp; the repair status, including completed and pending repairs. <br>
&emsp; &ensp; • Dormitory managers can also view the detailed repair requests of their respective buildings. <br>

**(7) Room Card Management**: <br>
&emsp; &ensp; This controls whether students can access the dormitory. <br>
&emsp; &ensp; If students fail to pay on time, their room card will be deactivated. <br>

**(8) Late Return Records**: <br>
&emsp; &ensp; This function is used to record and view students' late return information for the current month.

**(9) Utility Bill Management**: <br>
&emsp; &ensp; • Students can pay their utility bills for the previous month and view the payment history for utilities <br>
&emsp; &emsp; during their dorm stay. <br>
&emsp; &ensp; • The property management team can issue payment notifications. <br>
&emsp; &ensp; • Dormitory managers can monitor the payment status of each dormitory within their building.<br>
