<?php
require('fpdf/FPDF_HTML.php');

$pdf=new FPDF_HTML();
        $pdf->SetTitle('Brochure');
        $pdf->SetFont('Times','',18);
        $pdf->AddPage();
       // $pdf->SetLineWidth(350);
        
            //$pdf->Image(,168,10, 25);
        
        $pdf->WriteHTML('<p align="center"><b>'.html_entity_decode(utf8_decode(get_the_title())).'</b></p>');
        $pdf->Ln(); $pdf->Ln();
        
        $pdf->Cell( 40, 40, $pdf->Image(get_the_post_thumbnail_url(), $pdf->GetX(), $pdf->GetY(), 186), 0, 0, 'L', false );
         $pdf->Ln(); $pdf->Ln();
        
        
        $pdf->SetFont('Arial','',9);
        while(have_posts()){
            the_post();
            $pdf->WriteHTML(utf8_decode(apply_filters( 'the_content', strip_shortcodes(get_the_content() ))));
        }
        $pdf->Ln();
        /*if(get_field('trip_highlights')){
            $pdf->SetFont('Times','',18);
            $pdf->AddPage();
            
            $pdf->WriteHTML('<p align="center"><b>Highlights</b></p>');
            $pdf->Ln();
            
            
            $pdf->WriteHTML(utf8_decode(apply_filters( 'the_content', strip_shortcodes(get_field("trip_highlights") ))));
        }*/
        
        
        
        if (get_field('trip_itinerary')){
            $pdf->SetFont('Times','',18);
            $pdf->AddPage();
            
            $pdf->WriteHTML('<p align="center"><b>Itinerary</b></p>');
            $pdf->Ln();
        
            while ( have_rows('trip_itinerary') ) { the_row();
                $pdf->SetFont('Times','',14);
                
                $pdf->WriteHTML('<p align="center"><b>'.get_sub_field("trip_title").'</b></p>');
                $pdf->SetFont('Arial','',9);
                
                $pdf->WriteHTML(utf8_decode(apply_filters( 'the_content', strip_shortcodes(get_sub_field("trip_detail") ))));
                $pdf->Ln();
                
                
            
            }
        
        
        
        }
        if(get_field('trip_includes')){
            $pdf->SetFont('Times','',18);
            $pdf->AddPage();
            
            $pdf->WriteHTML('<p align="center"><b>Includes</b></p>');
            $pdf->Ln();
            
            
            $pdf->SetFont('Arial','',9);
            
            $pdf->WriteHTML(utf8_decode(apply_filters( 'the_content', strip_shortcodes(get_field('trip_includes')))));
            $pdf->Ln();
        }
        
        if(get_field('trip_exclude')){
            $pdf->SetFont('Times','',18);
            
            $pdf->WriteHTML('<p align="center"><b>Excludes</b></p>');
            $pdf->Ln();
            
            
            $pdf->SetFont('Arial','',9);
            
            $pdf->WriteHTML(utf8_decode(apply_filters( 'the_content', strip_shortcodes(get_field('trip_exclude')))));
            $pdf->Ln();
        }
      
            
        if(isset($_GET['download']) && $_GET['download']=='download'){
            $pdf->Output('D', 'Brochure.pdf');
        }else{
            $pdf->Output( 'I', 'Brochure.pdf');
        }
        exit; ?> 