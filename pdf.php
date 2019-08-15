<?php require( 'pdf/fpdf.php' );?>

<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $country = $_POST['country'];
    $tel_number = $_POST['tel_number'];
    $cell_number = $_POST['cell_number'];
    $payment_method = $_POST['payment_method'];
    $card_number = $_POST['card_number'];
    $amount = $_POST['amount'];
    $exp_date = $_POST['exp_date'];
    $cvv = $_POST['cvv'];
    $name_on_card = $_POST['name_on_card'];
    $date = $_POST['date'];
    
    $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["signature"]["name"]);
        move_uploaded_file($_FILES["signature"]["tmp_name"], $target_file);
      
    
    //pdf generate starts
    
    $pdf = new FPDF('P','mm','A4');
    
    $pdf->AddPage();
    //set font to arial , bold , 14pt
    $pdf->SetFont('Arial','B',16);
    
    //setting the logo ( x , y axis , width height , image trype)
    $pdf->Image('https://git-scm.com/images/logos/downloads/Git-Icon-1788C.png',80,5,40,10,'PNG');
    $pdf->Ln(5);
    
    //Cell( width , height , text , border 0: No Border / 1: Bordered , end line 0: Continue / 1: New Line , align: 'L' / 'R' / 'C' )
    $pdf->Cell(0,8,'Atlanta One Limo, LLC',0,1,'C');
    
    //set font to arial , bold , 10pt
    $pdf->SetFont('Arial','B',10);
    
    $pdf->Cell(0,6,'3384 Palm Cir NW Kennesaw, GA 30144',0,1,'C');
    
    //set font to arial , bold , 9pt
    $pdf->SetFont('Arial','B',9);
    
    $pdf->Cell(0,6,'PH: (404) 944-0646',0,1,'C');
    $pdf->Cell(0,6,'(646) 932-5225',0,1,'C');
    $pdf->Cell(0,6,'atlonelimo@gmail.com',0,1,'C');
    
    $pdf->Ln(5);
    //set font to arial , none style , 16pt
    $pdf->SetFont('Arial','',16);
    $pdf->Cell(0,8,'Credit Authorization Form',0,1,'L');
    
    //set font to arial , none style , 11pt
    $pdf->SetFont('Arial','',11);
    $pdf->Ln(3);
    $pdf->Cell(8,6,'   I, ',0,0);
    //set font to arial , underlined 
    $pdf->SetFont('Arial','U');
    $pdf->Cell(50,6,$fname,0,0,'C');
    //set font to arial , none style
    $pdf->SetFont('Arial','');
    $pdf->Cell(130,6,' ,hereby authorize Atlanta One Limo,LLC, to Charge my account for all',0,1);
    
    $pdf->Ln(2);
    $pdf->Cell(0,6,' reservations as follows: ',0,1,'L');
    
    $pdf->Ln(3);
    if($payment_method == 'Visa'){
        $pdf->Cell(18,6,'( * ) Visa',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'(  ) MasterCard',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(40,6,'(  ) American Express',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(25,6,'(  ) Discover',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'(  ) Dinners Club',0,1);
    }elseif($payment_method == 'MasterCard'){
        $pdf->Cell(18,6,'(  ) Visa',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'( * ) MasterCard',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(40,6,'(  ) American Express',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(25,6,'(  ) Discover',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'(  ) Dinners Club',0,1);
    }elseif($payment_method == 'American Express'){
        $pdf->Cell(18,6,'(  ) Visa',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'(  ) MasterCard',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(40,6,'( * ) American Express',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(25,6,'(  ) Discover',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'(  ) Dinners Club',0,1);
    }elseif($payment_method == 'Discover'){
        $pdf->Cell(18,6,'(  ) Visa',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'(  ) MasterCard',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(40,6,'(  ) American Express',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(25,6,'( * ) Discover',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'(  ) Dinners Club',0,1);
    }else{
        $pdf->Cell(18,6,'(  ) Visa',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'(  ) MasterCard',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(40,6,'(  ) American Express',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(25,6,'(  ) Discover',0,0);
        $pdf->Cell(8,6,'',0,0);
        $pdf->Cell(30,6,'( * ) Dinners Club',0,1);
    }
    
    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(40,6,'Credit Card Number : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$card_number,0,1,'L');
    
    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(20,6,'Amount : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$amount,0,1,'L');
    
    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(32,6,'Expiration Date : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$exp_date,0,1,'L');

    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(15,6,'CVV # ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$cvv,0,1,'L');
    
    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(15,6,'Street ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$street,0,1,'L');
    
    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(12,6,'City : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$city,0,1,'L');

    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(15,6,'State : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$state,0,1,'L');
    
    $pdf->Ln(3);
    //set font to arial , no style
    $pdf->SetFont('Arial','');
    $pdf->Cell(20,6,'Zip Code : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$zip_code,0,1,'L');

    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(50,6,'Country (if not in the US) : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$country,0,1,'L');
    
    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(25,6,'Telephone : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(40,6,$tel_number,0,0,'L');
    //set font to arial , no style
    $pdf->SetFont('Arial','');
    $pdf->Cell(20,6,'[home]',0,1,'L');

    $pdf->Ln(3);
    //set font to arial , no style
    $pdf->SetFont('Arial','');
    $pdf->Cell(25,6,'',0,0);
    $pdf->Cell(40,6,$cell_number,0,0,'L');
    //set font to arial , no style
    $pdf->SetFont('Arial','');
    $pdf->Cell(15,6,'[cell]',0,1,'L');
    
    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(30,6,'Name on Card : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$name_on_card,0,1,'L');
    
    $pdf->Ln(3);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(22,6,'Sign here : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    //setting the logo ( x , y axis , width height , image trype)
    $pdf->Image('https://stor.calligraphy-museum.com/source/image/SignatureSamples/910b8ce0-4d97-44f3-ad0e-94f42aaf00be.jpg',40,205,50,30);

    $pdf->Ln(50);
    //set font to arial , bold
    $pdf->SetFont('Arial','B');
    $pdf->Cell(15,6,'Date : ',0,0);
    //set font to arial , underlined
    $pdf->SetFont('Arial','U');
    $pdf->Cell(0,6,$date,0,1,'L');
    
    
    //pagination for the page
    $pdf->Ln(10);
    $pdf->PageNo();
    $pdf->AliasNbPages();
    //set font to arial , Italic,
    $pdf->SetFont('Arial','I', 8);
    $pdf->Cell(0, 5, "Page " . $pdf->PageNo() . "/{nb}", 0, 1, 'C');
    
    
    //next page of pdf starts
    
    $pdf->AddPage();
    
    $pdf->Ln(3);
    //set font to arial , bold style , 11pt
    $pdf->SetFont('Arial','B',11);
    $pdf->Cell(35,6,'Attachments',0,1);
    
    $pdf->Ln(8);
    //set font to arial , none style , 11pt
    $pdf->SetFont('Arial','B',11);
    $pdf->Cell(30,6,'Credit Card :',0,1,'C');
    $pdf->Ln(5);
    //setting the passport ( x , y axis , width height , image trype)
    $pdf->Image('http://waagacusub.net/uploads/article/photo/IMG_2C0639-27BD9E-08802E-0CC0B3-F8D525-6C955F.jpg',50,30,86,54);
    
    
    $pdf->Ln(55);
    $pdf->Cell(0,0,'',1,1);
    $pdf->Ln(5);
    $pdf->Cell(40,6,'Driving Liscense :',0,1,'C');
    $pdf->Ln(5);
    //setting the driving liscense ( x , y axis , width height , image trype)
    $pdf->Image('https://i.stack.imgur.com/zUKhz.jpg',50,105,86,54);
    

    //footer
    $pdf->Ln(120);
    //set font to arial , bold,
    $pdf->SetFont('Arial','B', 8);
    $pdf->Cell(35,6,'Special Instructions : ',0,1);
    //set font to arial , no style,
    $pdf->SetFont('Arial','', 8);
    $pdf->Cell(0,6,"Please enclose a copy of the Credit Card front and back along with a copy of your driver's license. All must be visible and legible for us to view clearly.",0,1);
    $pdf->Cell(0,6,"Your completion of the 'Authorization Form' helps us protect you, our valued customers, from credit card fraud. Atlanta One Limo, LLC will keep all",0,1);
    $pdf->Cell(0,6,"information obtained on this from strictly confidential.",0,1);
    
    //pagination for the page
    $pdf->Ln(5);
    $pdf->PageNo();
    $pdf->AliasNbPages();
    //set font to arial , Italic,
    $pdf->SetFont('Arial','I', 8);
    $pdf->Cell(0, 5, "Page " . $pdf->PageNo() . "/{nb}", 0, 1, 'C');
    
    
    
    
    
    $pdf->Output();
            
}


?>