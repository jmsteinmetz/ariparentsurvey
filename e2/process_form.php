<?php
/**
 * Created with Visual Form Builder by 23rd and Walnut
 * www.visualformbuilder.com
 * www.23andwalnut.com
 */

$form = new ProcessForm();
$form->field_rules = array(
	'field1'=>'required',
	'field2'=>'required',
	'field3'=>'required',
	'field4'=>'required',
	'field5'=>'required',
	'field8'=>'number|min[5]|max[10]|required',
	'field7'=>'email|required',
	'field9'=>'required',
	'field10'=>'required',
	'field11'=>'required',
	'field12'=>'required',
	'Field13'=>'number',
	'field14'=>'number',
	'field16'=>'required',
	'field17'=>'required',
	'field18'=>'',
	'field19'=>'',
	'field20'=>'',
	'field21'=>'required',
	'field22'=>'required',
	'field23'=>'',
	'field24'=>'',
	'field25'=>'',
	'field26'=>'',
	'field27'=>'required',
	'field28'=>'required',
	'field29'=>'',
	'field30'=>'required',
	'field31'=>'required',
	'field32'=>'required',
	'field33'=>'required',
	'field34'=>'required',
	'field35'=>'required',
	'field36'=>'required',
	'field37'=>'required',
	'field38'=>'',
	'field40'=>'required',
	'field41'=>'required',
	'field42'=>'required',
	'field43'=>'required',
	'field44'=>'required',
	'field45'=>'required',
	'field46'=>'required',
	'field47'=>'',
	'field48'=>'required',
	'field49'=>'required',
	'field50'=>'required',
	'field51'=>'required',
	'field53'=>'required',
	'field52'=>'required',
	'field54'=>'required',
	'field55'=>'required',
	'field56'=>'required',
	'field57'=>'required',
	'field58'=>'required',
	'field59'=>'required',
	'field60'=>'required',
	'field61'=>'required',
	'field62'=>'required',
	'field63'=>'required',
	'field64'=>'required',
	'field65'=>'required',
	'field66'=>'required',
	'field67'=>'required',
	'field68'=>'required',
	'field69'=>'required',
	'field70'=>'required',
	'field71'=>'required',
	'field72'=>'required',
	'field73'=>'required',
	'field74'=>'required',
	'field75'=>'required',
	'field76'=>'required',
	'field77'=>'required',
	'field78'=>'required',
	'field79'=>'required',
	'field80'=>'required',
	'field81'=>'required',
	'field82'=>'required',
	'field83'=>'required',
	'field84'=>'',
	'field85'=>'',
	'field86'=>'required',
	'field87'=>'',
	'field88'=>'',
	'field89'=>'required',
	'field90'=>'required',
	'field91'=>'required',
	'field92'=>'required',
	'field93'=>'required',
	'field94'=>'required',
	'field95'=>'required',
	'field96'=>'required',
	'field97'=>'required',
	'field98'=>'required',
	'field99'=>'required',
	'field100'=>'required',
	'field101'=>'required',
	'field102'=>'required',
	'field103'=>'required',
	'field104'=>'required',
	'field105'=>'required',
	'field106'=>'required',
	'field107'=>'',
	'field108'=>'',
	'field109'=>'',
	'field110'=>'',
	'field111'=>'required',
	'field112'=>'required',
	'field113'=>'required',
	'field114'=>'required',
	'field115'=>'required',
	'field116'=>'required',
	'field117'=>'required',
	'field118'=>'required',
	'field119'=>'required',
	'field120'=>'required',
	'field121'=>'required',
	'field122'=>'required',
	'field123'=>'required',
	'field124'=>'required',
	'field125'=>'required',
	'field126'=>'required',
	'field127'=>'required',
	'field128'=>'required',
	'field129'=>'required',
	'field130'=>'required',
	'field131'=>'required',
	'field132'=>'required',
	'field133'=>'required',
	'field134'=>'required',
	'field135'=>'required',
	'field136'=>'required',
	'field137'=>'required',
	'field138'=>'required',
	'field139'=>'required',
	'field140'=>'required'
);
$form->validate();

class ProcessForm
{
    public $field_rules;
    public $error_messages;
    public $fields;
    private $error_list;
    private $is_xhr;





    function __construct()
    {
        $this->error_messages = array(
            'required' => 'This field is required',
            'email' => 'Please enter a valid email address',
            'number' => 'Please enter a numeric value',
            'url' => 'Please enter a valid URL',
            'pattern' => 'Please correct this value',
            'min' => 'Please enter a value larger than the minimum value',
            'max' => 'Please enter a value smaller than the maximum value'
        );

        $this->field_rules = array();
        $this->error_list = '';
        $this->fields = $_POST;
        $this->is_xhr = $this->xhr();
    }





    function validate()
    {
        if (!empty($this->fields))
        {
            //Validate each of the fields
            foreach ($this->field_rules as $field => $rules)
            {
                $rules = explode('|', $rules);

                foreach ($rules as $rule)
                {
                    $result = null;

                    if (isset($this->fields[$field]))
                    {
                        $param = false;

                        if (preg_match("/(.*?)\[(.*?)\]/", $rule, $match))
                        {
                            $rule = $match[1];
                            $param = $match[2];
                        }

                        $this->fields[$field] = $this->clean($this->fields[$field]);

                        //if the field is a checkbox group create string
                        if (is_array($this->fields[$field]))
                            $this->fields[$field] = implode(', ', $this->fields[$field]);

                        // Call the function that corresponds to the rule
                        if (!empty($rule))
                            $result = $this->$rule($this->fields[$field], $param);

                        // Handle errors
                        if ($result === false)
                            $this->set_error($field, $rule);
                    }
                }
            }

            if (empty($this->error_list))
            {
                if ($this->is_xhr)
                    echo json_encode(array('status' => 'success'));

                $this->process();
            }
            else
            {
                if ($this->is_xhr)
                    echo json_encode(array('status' => 'invalid', 'errors' => $this->error_list));
                else echo $this->error_list;
            }
        }
    }





    function process()
    {
         /**
         * SUCCESS!!
         * There were no errors in the form. Insert your processing logic here (i.e. send an email, save to a
         * database etc.
         *
         * All of the submitted fields are available in the $this->fields variable.
         *
         *
         * IMPORTANT - PLEASE READ:
         * 1. YOU MUST UNCOMMENT THE CODE FOR IT TO WORK.
         *    - This means removing the '//' in front of each line.
         *    - If you do not know what php comments are see here: http://php.net/manual/en/language.basic-syntax.comments.php
         *
         * 2. YOU CAN ENTER ANY EMAIL ADDRESS IN THE $from VARIABLE.
         *    - This is the address that will show in the From column in your mail application.
         *    - If your form contains an email field, and you want to use that value as the $from variable, you can set $from = $this->fields['name of your email field'];
         *
         * 3. FILE ATTACHMENTS
         *    - As stated in the description on codecanyon, this code does not mail attachments. Google 'php html email attachments' for information on how to do this
         *
         *  4. REDIRECTING TO ANOTHER PAGE AFTER SUBMISSION
         *    - This is an ajax enabled form, so you need to perform the redirection in main.js AND this php file.
         *      a. Please see instructions in main.js for redirection. This is for users without JS.
         *      b. Replace the relevant code below with the page you would like to redirect to. REMEMBER TO UNCOMMENT THE LINE FOR IT TO WORK.
         */



         /*********************************************/
         /*             SAMPLE MAIL CODE              */
         /*********************************************/

         $msg = "Form Contents: \n\n";
          foreach($this->fields as $key => $field)
                $msg .= "$key :  $field \n";
				

          $to = 'john@slingspace.com';
          $subject = 'e-2 Form';
          $from = 'info@aricontentmanager.com';

          mail($to, $subject, $msg, "From: $from\r\nReply-To: $from\r\nReturn-Path: $from\r\n");
		  
		  //print $msg;



        /************************************************************************************/
        /*                                REDIRECTION CODE                                  */
        /*         Only uncomment the line below if you want to redirect to another page    */
        /*                          when the form has been submitted                        */
        /************************************************************************************/

        //if (!$this->is_xhr)
        //    header('Location: http://www.example.com/somePage.html');


    }



    function set_error($field, $rule)
    {
        if ($this->is_xhr)
        {
            $this->error_list[$field] = $this->error_messages[$rule];
        }
        else $this->error_list .= "<div class='error'>$field: " . $this->error_messages[$rule] . "</div>";
    }





    function xhr()
    {
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ? true : false;
    }





    /** Validation Functions */
    function required($str, $val = false)
    {

        if (!is_array($str))
        {
            $str = trim($str);
            return ($str == '') ? false : true;
        }
        else
        {
            return (!empty($str));
        }
    }





    function email($str)
    {
        return (!preg_match("/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD", $str)) ? false : true;
    }





    function number($str)
    {
        return (!is_numeric($str)) ? false : true;
    }





    function min($str, $val)
    {
        return ($str >= $val) ? true : false;
    }





    function max($str, $val)
    {
        return ($str <= $val) ? true : false;
    }





    function pattern($str, $pattern)
    {
        return (!preg_match($pattern, $str)) ? false : true;
    }





    function clean($str)
    {
        $str = is_array($str) ? array_map(array("ProcessForm", 'clean'), $str) : str_replace('\\', '\\\\', strip_tags(trim(htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($str) : $str), ENT_QUOTES))));
        return $str;
    }
}


?>