<?php

namespace Database\Seeders;

use App\Models\EmailTemplate;
use Illuminate\Database\Seeder;

class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Appointment Letter Template
        EmailTemplate::create(['mail_name' => 'Appointment Letter', 'mail_type' => 'type 2', 'mail_subject' => 'Letter for Appointment', 'mail_body' => '<p><p><!--[if !mso]>
        <style>
        v\:* {behavior:url(#default#VML);}
        o\:* {behavior:url(#default#VML);}
        w\:* {behavior:url(#default#VML);}
        .shape {behavior:url(#default#VML);}
        </style>
        <![endif]--><!--[if gte mso 9]><xml>
         <w:WordDocument>
          <w:View>Normal</w:View>
          <w:Zoom>0</w:Zoom>
          <w:TrackMoves>false</w:TrackMoves>
          <w:TrackFormatting/>
          <w:PunctuationKerning/>
          <w:ValidateAgainstSchemas/>
          <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
          <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
          <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
          <w:DoNotPromoteQF/>
          <w:LidThemeOther>EN-US</w:LidThemeOther>
          <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
          <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
          <w:Compatibility>
           <w:BreakWrappedTables/>
           <w:SnapToGridInCell/>
           <w:WrapTextWithPunct/>
           <w:UseAsianBreakRules/>
           <w:DontGrowAutofit/>
           <w:SplitPgBreakAndParaMark/>
           <w:EnableOpenTypeKerning/>
           <w:DontFlipMirrorIndents/>
           <w:OverrideTableStyleHps/>
          </w:Compatibility>
          <w:DoNotOptimizeForBrowser/>
          <m:mathPr>
           <m:mathFont m:val="Cambria Math"/>
           <m:brkBin m:val="before"/>
           <m:brkBinSub m:val="&#45;-"/>
           <m:smallFrac m:val="off"/>
           <m:dispDef/>
           <m:lMargin m:val="0"/>
           <m:rMargin m:val="0"/>
           <m:defJc m:val="centerGroup"/>
           <m:wrapIndent m:val="1440"/>
           <m:intLim m:val="subSup"/>
           <m:naryLim m:val="undOvr"/>
          </m:mathPr></w:WordDocument>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
          DefSemiHidden="false" DefQFormat="false" DefPriority="99"
          LatentStyleCount="371">
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="Normal"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="heading 1"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 9"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 1"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 2"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 3"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 4"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 5"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 6"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 7"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 8"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="header"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footer"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index heading"/>
          <w:LsdException Locked="false" Priority="35" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="caption"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of figures"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope return"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="line number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="page number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of authorities"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="macro"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="toa heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 5"/>
          <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Closing"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Signature"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" Name="Default Paragraph Font"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="Body Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Message Header"/>
          <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Salutation"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Date"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Note Heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Block Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Hyperlink"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="FollowedHyperlink"/>
          <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
          <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Document Map"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Plain Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="E-mail Signature"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Top of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Bottom of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal (Web)"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Acronym"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Cite"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Code"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Definition"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Keyboard"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Preformatted"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Sample"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Typewriter"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Variable"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Table"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation subject"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="No List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Contemporary"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Elegant"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Professional"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Balloon Text"/>
          <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Theme"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
          <w:LsdException Locked="false" Priority="34" QFormat="true"
           Name="List Paragraph"/>
          <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
          <w:LsdException Locked="false" Priority="30" QFormat="true"
           Name="Intense Quote"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="19" QFormat="true"
           Name="Subtle Emphasis"/>
          <w:LsdException Locked="false" Priority="21" QFormat="true"
           Name="Intense Emphasis"/>
          <w:LsdException Locked="false" Priority="31" QFormat="true"
           Name="Subtle Reference"/>
          <w:LsdException Locked="false" Priority="32" QFormat="true"
           Name="Intense Reference"/>
          <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
          <w:LsdException Locked="false" Priority="37" SemiHidden="true"
           UnhideWhenUsed="true" Name="Bibliography"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
          <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
          <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
          <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
          <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
          <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
          <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
          <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 6"/>
         </w:LatentStyles>
        </xml><![endif]--><!--[if gte mso 10]>
        <style>
         /* Style Definitions */
         table.MsoNormalTable
            {mso-style-name:"Table Normal";
            mso-tstyle-rowband-size:0;
            mso-tstyle-colband-size:0;
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-parent:"";
            mso-padding-alt:0in 5.4pt 0in 5.4pt;
            mso-para-margin:0in;
            mso-para-margin-bottom:.0001pt;
            mso-pagination:none;
            text-autospace:none;
            font-size:11.0pt;
            font-family:"Calibri","sans-serif";
            mso-ascii-font-family:Calibri;
            mso-ascii-theme-font:minor-latin;
            mso-hansi-font-family:Calibri;
            mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:"Times New Roman";
            mso-bidi-theme-font:minor-bidi;}
        </style>
        <![endif]--><!--[if gte mso 9]><xml>
         <o:shapedefaults v:ext="edit" spidmax="1030"/>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <o:shapelayout v:ext="edit">
          <o:idmap v:ext="edit" data="1"/>
         </o:shapelayout></xml><![endif]-->

        </p><p class="MsoBodyText" style="margin-left:33.0pt"><span lang="NL">Hierbij<span style="letter-spacing:-.15pt"> </span>nodig<span style="letter-spacing:-.15pt">
        </span>ik<span style="letter-spacing:-.15pt"> </span>u<span style="letter-spacing:
        -.1pt"> </span>uit<span style="letter-spacing:-.15pt"> </span>voor<span style="letter-spacing:-.15pt"> </span>een<span style="letter-spacing:-.2pt"> </span>afspraak:</span></p><p class="MsoBodyText" style="margin-left:33.0pt"><!--[if gte mso 9]><xml>
         <w:WordDocument>
          <w:View>Normal</w:View>
          <w:Zoom>0</w:Zoom>
          <w:TrackMoves/>
          <w:TrackFormatting/>
          <w:PunctuationKerning/>
          <w:ValidateAgainstSchemas/>
          <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
          <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
          <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
          <w:DoNotPromoteQF/>
          <w:LidThemeOther>EN-US</w:LidThemeOther>
          <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
          <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
          <w:Compatibility>
           <w:BreakWrappedTables/>
           <w:SnapToGridInCell/>
           <w:WrapTextWithPunct/>
           <w:UseAsianBreakRules/>
           <w:DontGrowAutofit/>
           <w:SplitPgBreakAndParaMark/>
           <w:EnableOpenTypeKerning/>
           <w:DontFlipMirrorIndents/>
           <w:OverrideTableStyleHps/>
          </w:Compatibility>
          <w:DoNotOptimizeForBrowser/>
          <m:mathPr>
           <m:mathFont m:val="Cambria Math"/>
           <m:brkBin m:val="before"/>
           <m:brkBinSub m:val="&#45;-"/>
           <m:smallFrac m:val="off"/>
           <m:dispDef/>
           <m:lMargin m:val="0"/>
           <m:rMargin m:val="0"/>
           <m:defJc m:val="centerGroup"/>
           <m:wrapIndent m:val="1440"/>
           <m:intLim m:val="subSup"/>
           <m:naryLim m:val="undOvr"/>
          </m:mathPr></w:WordDocument>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
          DefSemiHidden="false" DefQFormat="false" DefPriority="99"
          LatentStyleCount="371">
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="Normal"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="heading 1"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 9"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 1"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 2"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 3"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 4"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 5"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 6"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 7"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 8"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="header"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footer"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index heading"/>
          <w:LsdException Locked="false" Priority="35" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="caption"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of figures"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope return"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="line number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="page number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of authorities"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="macro"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="toa heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 5"/>
          <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Closing"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Signature"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" Name="Default Paragraph Font"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="Body Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Message Header"/>
          <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Salutation"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Date"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Note Heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Block Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Hyperlink"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="FollowedHyperlink"/>
          <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
          <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Document Map"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Plain Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="E-mail Signature"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Top of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Bottom of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal (Web)"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Acronym"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Cite"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Code"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Definition"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Keyboard"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Preformatted"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Sample"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Typewriter"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Variable"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Table"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation subject"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="No List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Contemporary"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Elegant"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Professional"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Balloon Text"/>
          <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Theme"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
          <w:LsdException Locked="false" Priority="34" QFormat="true"
           Name="List Paragraph"/>
          <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
          <w:LsdException Locked="false" Priority="30" QFormat="true"
           Name="Intense Quote"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="19" QFormat="true"
           Name="Subtle Emphasis"/>
          <w:LsdException Locked="false" Priority="21" QFormat="true"
           Name="Intense Emphasis"/>
          <w:LsdException Locked="false" Priority="31" QFormat="true"
           Name="Subtle Reference"/>
          <w:LsdException Locked="false" Priority="32" QFormat="true"
           Name="Intense Reference"/>
          <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
          <w:LsdException Locked="false" Priority="37" SemiHidden="true"
           UnhideWhenUsed="true" Name="Bibliography"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
          <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
          <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
          <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
          <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
          <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
          <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
          <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 6"/>
         </w:LatentStyles>
        </xml><![endif]--><!--[if gte mso 10]>
        <style>
         /* Style Definitions */
         table.MsoNormalTable
            {mso-style-name:"Table Normal";
            mso-tstyle-rowband-size:0;
            mso-tstyle-colband-size:0;
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-parent:"";
            mso-padding-alt:0in 5.4pt 0in 5.4pt;
            mso-para-margin:0in;
            mso-para-margin-bottom:.0001pt;
            mso-pagination:none;
            text-autospace:none;
            font-size:11.0pt;
            font-family:"Calibri","sans-serif";
            mso-ascii-font-family:Calibri;
            mso-ascii-theme-font:minor-latin;
            mso-hansi-font-family:Calibri;
            mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:"Times New Roman";
            mso-bidi-theme-font:minor-bidi;}
        </style>
        <![endif]-->

        </p><p class="MsoBodyText" style="margin-top:12.8pt;margin-right:0in;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt;line-height:12.55pt;mso-line-height-rule:
        exactly;tab-stops:right 156.35pt"><span lang="NL">Datum:<span style="mso-tab-count:
        1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>{{ $appointmentDate }}</span></p><p class="MsoBodyText" style="margin-top:0in;margin-right:281.35pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt;tab-stops:105.0pt"><span lang="NL">Tijd:<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>{{ $appointmentTime }}<span style="letter-spacing:.05pt"> </span></span></p><p class="MsoBodyText" style="margin-top:0in;margin-right:281.35pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt;tab-stops:105.0pt"><span lang="NL"><span style="letter-spacing:.05pt"></span>Behandelaar:<span style="mso-tab-count:
        1">&nbsp;&nbsp;&nbsp; {{ $therapistName }} </span></span></p><p class="MsoBodyText" style="margin-top:.05pt;margin-right:0in;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt;tab-stops:105.0pt"><span lang="NL">Locatie:<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Weena-Zuid<span style="letter-spacing:
        -.2pt"> </span>130,<span style="letter-spacing:-.15pt"> </span>4e<span style="letter-spacing:-.2pt"> </span>verdieping,<span style="letter-spacing:
        -.15pt"> </span>te<span style="letter-spacing:-.2pt"> </span>Rotterdam</span></p><p></p><p>

        </p><p class="MsoBodyText" style="margin-top:0in;margin-right:36.65pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt"><span lang="NL">Mocht de afspraak u
        toch niet schikken, dan verzoeken wij u dringend dit minimaal 24 uur van<span style="letter-spacing:.05pt"> </span>tevoren te melden. U dient dan telefonisch
        contact op te nemen met bovenstaand telefoonnummer,<span style="letter-spacing:
        -2.6pt"> </span>voor<span style="letter-spacing:-.1pt"> </span>het<span style="letter-spacing:-.05pt"> </span>maken<span style="letter-spacing:-.05pt">
        </span>van<span style="letter-spacing:-.05pt"> </span>een<span style="letter-spacing:-.05pt"> </span>nieuwe<span style="letter-spacing:-.05pt">
        </span>afspraak.</span></p><p class="MsoBodyText" style="margin-top:.1pt"><span lang="NL" style="font-size:
        10.0pt;mso-bidi-font-size:11.0pt">&nbsp;</span></p><p class="MsoBodyText" style="margin-left:33.0pt"><span lang="NL">Met<span style="letter-spacing:-.25pt"> </span>vriendelijke<span style="letter-spacing:
        -.2pt"> </span>groet,</span></p><p class="MsoBodyText" style="margin-left:33.0pt"><img style="width: 115.083px; height: 115.083px;" data-filename="16870132280.png" src="/upload/16962567940.png"><span lang="NL"><br></span></p><p class="MsoBodyText" style="margin-top:.05pt;margin-right:0in;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt"><span lang="NL">MiSi<span style="letter-spacing:-.3pt"> </span>Neuropsy<span style="letter-spacing:-.3pt">
        </span>Zorgadministratie</span></p><h1 style="margin-top:9.05pt;margin-right:0in;margin-bottom:0in;margin-left:
        33.0pt;margin-bottom:.0001pt"><span lang="NL">Belangrijke<span style="letter-spacing:
        -.35pt"> </span>informatie:</span></h1><p class="MsoBodyText" style="margin-top:.1pt;margin-right:17.15pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt"><span lang="NL">Behandelcontacten
        met MiSi Neuropsy, worden gedeclareerd bij uw zorgverzekeraar. Afhankelijk van<span style="letter-spacing:-2.6pt"> </span>eerder gemaakte zorgkosten kan dit ten
        koste gaan van uw verplichte eigen risico. Uw zorgverzekeraar<span style="letter-spacing:-2.6pt"> </span>brengt dit bedrag bij u in rekening. Wat
        betreft de vergoeding van uw behandeling door uw<span style="letter-spacing:
        .05pt"> </span>ziektekostenverzekering<span style="letter-spacing:-.2pt"> </span>adviseren<span style="letter-spacing:-.15pt"> </span>wij<span style="letter-spacing:-.2pt"> </span>u<span style="letter-spacing:-.15pt"> </span>om<span style="letter-spacing:-.2pt"> </span>uw<span style="letter-spacing:-.15pt"> </span>verzekeringspolis<span style="letter-spacing:
        -.2pt"> </span>of<span style="letter-spacing:-.15pt"> </span>uw<span style="letter-spacing:-.2pt"> </span>verzekeraar<span style="letter-spacing:
        -.15pt"> </span>te<span style="letter-spacing:-.2pt"> </span>raadplegen.</span></p><p class="MsoBodyText" style="margin-top:0in;margin-right:36.95pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt"><span style="mso-ignore:vglayout;position:
        absolute;z-index:487538171;left:0px;margin-left:205px;margin-top:131px;
        width:13px;height:9px"><img width="13" height="9" src="file:///C:%5CUsers%5CYounus%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image002.gif"></span><span style="mso-ignore:vglayout;position:
        absolute;z-index:487538683;left:0px;margin-left:394px;margin-top:131px;
        width:13px;height:9px"><img width="13" height="9" src="file:///C:%5CUsers%5CYounus%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image002.gif"></span><span style="mso-ignore:vglayout;position:
        absolute;z-index:487539195;left:0px;margin-left:497px;margin-top:131px;
        width:13px;height:9px"><img width="13" height="9" src="file:///C:%5CUsers%5CYounus%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image002.gif"></span><span style="mso-ignore:vglayout;position:
        absolute;z-index:487540219;left:0px;margin-left:653px;margin-top:121px;
        width:66px;height:28px"></span><span lang="NL">Wij kunnen u ook hierbij helpen bij uw eerste
        bezoek. Wanneer u uw afspraak niet kunt nakomen,<span style="letter-spacing:
        -2.6pt"> </span>dient u ons dit minimaal 24 uur vooraf te laten weten. Voor
        afspraken die niet of niet op tijd zijn<span style="letter-spacing:.05pt"> </span>afgemeld<span style="letter-spacing:-.1pt"> </span>kunnen<span style="letter-spacing:-.05pt">
        </span>kosten<span style="letter-spacing:-.05pt"> </span>in<span style="letter-spacing:-.1pt"> </span>rekening<span style="letter-spacing:-.05pt">
        </span>gebracht<span style="letter-spacing:-.05pt"> </span>worden.</span></p><p></p><p></p></p><!--[if !mso]>
        <style>
        v\:* {behavior:url(#default#VML);}
        o\:* {behavior:url(#default#VML);}
        w\:* {behavior:url(#default#VML);}
        .shape {behavior:url(#default#VML);}
        </style>
        <![endif]--><!--[if gte mso 9]><xml>
         <w:WordDocument>
          <w:View>Normal</w:View>
          <w:Zoom>0</w:Zoom>
          <w:TrackMoves>false</w:TrackMoves>
          <w:TrackFormatting/>
          <w:PunctuationKerning/>
          <w:ValidateAgainstSchemas/>
          <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
          <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
          <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
          <w:DoNotPromoteQF/>
          <w:LidThemeOther>EN-US</w:LidThemeOther>
          <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
          <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
          <w:Compatibility>
           <w:BreakWrappedTables/>
           <w:SnapToGridInCell/>
           <w:WrapTextWithPunct/>
           <w:UseAsianBreakRules/>
           <w:DontGrowAutofit/>
           <w:SplitPgBreakAndParaMark/>
           <w:EnableOpenTypeKerning/>
           <w:DontFlipMirrorIndents/>
           <w:OverrideTableStyleHps/>
          </w:Compatibility>
          <w:DoNotOptimizeForBrowser/>
          <m:mathPr>
           <m:mathFont m:val="Cambria Math"/>
           <m:brkBin m:val="before"/>
           <m:brkBinSub m:val="&#45;-"/>
           <m:smallFrac m:val="off"/>
           <m:dispDef/>
           <m:lMargin m:val="0"/>
           <m:rMargin m:val="0"/>
           <m:defJc m:val="centerGroup"/>
           <m:wrapIndent m:val="1440"/>
           <m:intLim m:val="subSup"/>
           <m:naryLim m:val="undOvr"/>
          </m:mathPr></w:WordDocument>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
          DefSemiHidden="false" DefQFormat="false" DefPriority="99"
          LatentStyleCount="371">
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="Normal"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="heading 1"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 9"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 1"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 2"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 3"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 4"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 5"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 6"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 7"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 8"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="header"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footer"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index heading"/>
          <w:LsdException Locked="false" Priority="35" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="caption"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of figures"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope return"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="line number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="page number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of authorities"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="macro"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="toa heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 5"/>
          <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Closing"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Signature"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" Name="Default Paragraph Font"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="Body Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Message Header"/>
          <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Salutation"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Date"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Note Heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Block Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Hyperlink"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="FollowedHyperlink"/>
          <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
          <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Document Map"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Plain Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="E-mail Signature"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Top of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Bottom of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal (Web)"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Acronym"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Cite"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Code"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Definition"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Keyboard"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Preformatted"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Sample"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Typewriter"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Variable"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Table"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation subject"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="No List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Contemporary"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Elegant"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Professional"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Balloon Text"/>
          <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Theme"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
          <w:LsdException Locked="false" Priority="34" QFormat="true"
           Name="List Paragraph"/>
          <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
          <w:LsdException Locked="false" Priority="30" QFormat="true"
           Name="Intense Quote"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="19" QFormat="true"
           Name="Subtle Emphasis"/>
          <w:LsdException Locked="false" Priority="21" QFormat="true"
           Name="Intense Emphasis"/>
          <w:LsdException Locked="false" Priority="31" QFormat="true"
           Name="Subtle Reference"/>
          <w:LsdException Locked="false" Priority="32" QFormat="true"
           Name="Intense Reference"/>
          <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
          <w:LsdException Locked="false" Priority="37" SemiHidden="true"
           UnhideWhenUsed="true" Name="Bibliography"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
          <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
          <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
          <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
          <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
          <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
          <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
          <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 6"/>
         </w:LatentStyles>
        </xml><![endif]--><!--[if gte mso 10]>
        <style>
         /* Style Definitions */
         table.MsoNormalTable
            {mso-style-name:"Table Normal";
            mso-tstyle-rowband-size:0;
            mso-tstyle-colband-size:0;
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-parent:"";
            mso-padding-alt:0in 5.4pt 0in 5.4pt;
            mso-para-margin:0in;
            mso-para-margin-bottom:.0001pt;
            mso-pagination:none;
            text-autospace:none;
            font-size:11.0pt;
            font-family:"Calibri","sans-serif";
            mso-ascii-font-family:Calibri;
            mso-ascii-theme-font:minor-latin;
            mso-hansi-font-family:Calibri;
            mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:"Times New Roman";
            mso-bidi-theme-font:minor-bidi;}
        </style>
        <![endif]--><!--[if gte mso 9]><xml>
         <o:shapedefaults v:ext="edit" spidmax="1030"/>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <o:shapelayout v:ext="edit">
          <o:idmap v:ext="edit" data="1"/>
         </o:shapelayout></xml><![endif]-->
        ']);





        // Cancellation

        EmailTemplate::create(['mail_name' => 'Cancellation Letter', 'mail_type' => 'type 3', 'mail_subject' => 'Cancellation Letter', 'mail_body' => '<p><p><!--[if !mso]>
        <style>
        v\:* {behavior:url(#default#VML);}
        o\:* {behavior:url(#default#VML);}
        w\:* {behavior:url(#default#VML);}
        .shape {behavior:url(#default#VML);}
        </style>
        <![endif]--><!--[if gte mso 9]><xml>
         <w:WordDocument>
          <w:View>Normal</w:View>
          <w:Zoom>0</w:Zoom>
          <w:TrackMoves>false</w:TrackMoves>
          <w:TrackFormatting/>
          <w:PunctuationKerning/>
          <w:ValidateAgainstSchemas/>
          <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
          <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
          <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
          <w:DoNotPromoteQF/>
          <w:LidThemeOther>EN-US</w:LidThemeOther>
          <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
          <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
          <w:Compatibility>
           <w:BreakWrappedTables/>
           <w:SnapToGridInCell/>
           <w:WrapTextWithPunct/>
           <w:UseAsianBreakRules/>
           <w:DontGrowAutofit/>
           <w:SplitPgBreakAndParaMark/>
           <w:EnableOpenTypeKerning/>
           <w:DontFlipMirrorIndents/>
           <w:OverrideTableStyleHps/>
          </w:Compatibility>
          <w:DoNotOptimizeForBrowser/>
          <m:mathPr>
           <m:mathFont m:val="Cambria Math"/>
           <m:brkBin m:val="before"/>
           <m:brkBinSub m:val="&#45;-"/>
           <m:smallFrac m:val="off"/>
           <m:dispDef/>
           <m:lMargin m:val="0"/>
           <m:rMargin m:val="0"/>
           <m:defJc m:val="centerGroup"/>
           <m:wrapIndent m:val="1440"/>
           <m:intLim m:val="subSup"/>
           <m:naryLim m:val="undOvr"/>
          </m:mathPr></w:WordDocument>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
          DefSemiHidden="false" DefQFormat="false" DefPriority="99"
          LatentStyleCount="371">
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="Normal"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="heading 1"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 9"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 1"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 2"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 3"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 4"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 5"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 6"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 7"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 8"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="header"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footer"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index heading"/>
          <w:LsdException Locked="false" Priority="35" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="caption"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of figures"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope return"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="line number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="page number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of authorities"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="macro"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="toa heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 5"/>
          <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Closing"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Signature"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" Name="Default Paragraph Font"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="Body Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Message Header"/>
          <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Salutation"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Date"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Note Heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Block Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Hyperlink"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="FollowedHyperlink"/>
          <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
          <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Document Map"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Plain Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="E-mail Signature"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Top of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Bottom of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal (Web)"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Acronym"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Cite"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Code"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Definition"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Keyboard"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Preformatted"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Sample"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Typewriter"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Variable"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Table"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation subject"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="No List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Contemporary"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Elegant"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Professional"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Balloon Text"/>
          <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Theme"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
          <w:LsdException Locked="false" Priority="34" QFormat="true"
           Name="List Paragraph"/>
          <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
          <w:LsdException Locked="false" Priority="30" QFormat="true"
           Name="Intense Quote"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="19" QFormat="true"
           Name="Subtle Emphasis"/>
          <w:LsdException Locked="false" Priority="21" QFormat="true"
           Name="Intense Emphasis"/>
          <w:LsdException Locked="false" Priority="31" QFormat="true"
           Name="Subtle Reference"/>
          <w:LsdException Locked="false" Priority="32" QFormat="true"
           Name="Intense Reference"/>
          <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
          <w:LsdException Locked="false" Priority="37" SemiHidden="true"
           UnhideWhenUsed="true" Name="Bibliography"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
          <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
          <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
          <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
          <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
          <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
          <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
          <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 6"/>
         </w:LatentStyles>
        </xml><![endif]--><!--[if gte mso 10]>
        <style>
         /* Style Definitions */
         table.MsoNormalTable
            {mso-style-name:"Table Normal";
            mso-tstyle-rowband-size:0;
            mso-tstyle-colband-size:0;
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-parent:"";
            mso-padding-alt:0in 5.4pt 0in 5.4pt;
            mso-para-margin:0in;
            mso-para-margin-bottom:.0001pt;
            mso-pagination:none;
            text-autospace:none;
            font-size:11.0pt;
            font-family:"Calibri","sans-serif";
            mso-ascii-font-family:Calibri;
            mso-ascii-theme-font:minor-latin;
            mso-hansi-font-family:Calibri;
            mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:"Times New Roman";
            mso-bidi-theme-font:minor-bidi;}
        </style>
        <![endif]--><!--[if gte mso 9]><xml>
         <o:shapedefaults v:ext="edit" spidmax="1030"/>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <o:shapelayout v:ext="edit">
          <o:idmap v:ext="edit" data="1"/>
         </o:shapelayout></xml><![endif]-->

        </p><p class="MsoBodyText" style="margin-left:33.0pt"><span lang="NL">Hierbij<span style="letter-spacing:-.15pt"> </span>nodig<span style="letter-spacing:-.15pt">
        </span>ik<span style="letter-spacing:-.15pt"> </span>u<span style="letter-spacing:
        -.1pt"> </span>uit<span style="letter-spacing:-.15pt"> </span>voor<span style="letter-spacing:-.15pt"> </span>een<span style="letter-spacing:-.2pt"> </span>afspraak:</span></p><p class="MsoBodyText" style="margin-left:33.0pt"><!--[if gte mso 9]><xml>
         <w:WordDocument>
          <w:View>Normal</w:View>
          <w:Zoom>0</w:Zoom>
          <w:TrackMoves/>
          <w:TrackFormatting/>
          <w:PunctuationKerning/>
          <w:ValidateAgainstSchemas/>
          <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
          <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
          <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
          <w:DoNotPromoteQF/>
          <w:LidThemeOther>EN-US</w:LidThemeOther>
          <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
          <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
          <w:Compatibility>
           <w:BreakWrappedTables/>
           <w:SnapToGridInCell/>
           <w:WrapTextWithPunct/>
           <w:UseAsianBreakRules/>
           <w:DontGrowAutofit/>
           <w:SplitPgBreakAndParaMark/>
           <w:EnableOpenTypeKerning/>
           <w:DontFlipMirrorIndents/>
           <w:OverrideTableStyleHps/>
          </w:Compatibility>
          <w:DoNotOptimizeForBrowser/>
          <m:mathPr>
           <m:mathFont m:val="Cambria Math"/>
           <m:brkBin m:val="before"/>
           <m:brkBinSub m:val="&#45;-"/>
           <m:smallFrac m:val="off"/>
           <m:dispDef/>
           <m:lMargin m:val="0"/>
           <m:rMargin m:val="0"/>
           <m:defJc m:val="centerGroup"/>
           <m:wrapIndent m:val="1440"/>
           <m:intLim m:val="subSup"/>
           <m:naryLim m:val="undOvr"/>
          </m:mathPr></w:WordDocument>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
          DefSemiHidden="false" DefQFormat="false" DefPriority="99"
          LatentStyleCount="371">
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="Normal"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="heading 1"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 9"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 1"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 2"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 3"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 4"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 5"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 6"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 7"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 8"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="header"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footer"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index heading"/>
          <w:LsdException Locked="false" Priority="35" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="caption"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of figures"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope return"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="line number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="page number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of authorities"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="macro"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="toa heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 5"/>
          <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Closing"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Signature"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" Name="Default Paragraph Font"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="Body Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Message Header"/>
          <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Salutation"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Date"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Note Heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Block Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Hyperlink"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="FollowedHyperlink"/>
          <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
          <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Document Map"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Plain Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="E-mail Signature"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Top of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Bottom of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal (Web)"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Acronym"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Cite"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Code"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Definition"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Keyboard"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Preformatted"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Sample"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Typewriter"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Variable"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Table"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation subject"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="No List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Contemporary"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Elegant"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Professional"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Balloon Text"/>
          <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Theme"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
          <w:LsdException Locked="false" Priority="34" QFormat="true"
           Name="List Paragraph"/>
          <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
          <w:LsdException Locked="false" Priority="30" QFormat="true"
           Name="Intense Quote"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="19" QFormat="true"
           Name="Subtle Emphasis"/>
          <w:LsdException Locked="false" Priority="21" QFormat="true"
           Name="Intense Emphasis"/>
          <w:LsdException Locked="false" Priority="31" QFormat="true"
           Name="Subtle Reference"/>
          <w:LsdException Locked="false" Priority="32" QFormat="true"
           Name="Intense Reference"/>
          <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
          <w:LsdException Locked="false" Priority="37" SemiHidden="true"
           UnhideWhenUsed="true" Name="Bibliography"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
          <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
          <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
          <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
          <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
          <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
          <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
          <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 6"/>
         </w:LatentStyles>
        </xml><![endif]--><!--[if gte mso 10]>
        <style>
         /* Style Definitions */
         table.MsoNormalTable
            {mso-style-name:"Table Normal";
            mso-tstyle-rowband-size:0;
            mso-tstyle-colband-size:0;
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-parent:"";
            mso-padding-alt:0in 5.4pt 0in 5.4pt;
            mso-para-margin:0in;
            mso-para-margin-bottom:.0001pt;
            mso-pagination:none;
            text-autospace:none;
            font-size:11.0pt;
            font-family:"Calibri","sans-serif";
            mso-ascii-font-family:Calibri;
            mso-ascii-theme-font:minor-latin;
            mso-hansi-font-family:Calibri;
            mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:"Times New Roman";
            mso-bidi-theme-font:minor-bidi;}
        </style>
        <![endif]-->

        </p><p class="MsoBodyText" style="margin-top:12.8pt;margin-right:0in;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt;line-height:12.55pt;mso-line-height-rule:
        exactly;tab-stops:right 156.35pt"><span lang="NL">Datum:<span style="mso-tab-count:
        1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>{{ $appointmentDate }}</span></p><p class="MsoBodyText" style="margin-top:0in;margin-right:281.35pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt;tab-stops:105.0pt"><span lang="NL">Tijd:<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>{{ $appointmentTime }}<span style="letter-spacing:.05pt"> </span></span></p><p class="MsoBodyText" style="margin-top:0in;margin-right:281.35pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt;tab-stops:105.0pt"><span lang="NL"><span style="letter-spacing:.05pt"></span>Behandelaar:<span style="mso-tab-count:
        1">&nbsp;&nbsp;&nbsp; {{ $therapistName }} </span></span></p><p class="MsoBodyText" style="margin-top:.05pt;margin-right:0in;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt;tab-stops:105.0pt"><span lang="NL">Locatie:<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Weena-Zuid<span style="letter-spacing:
        -.2pt"> </span>130,<span style="letter-spacing:-.15pt"> </span>4e<span style="letter-spacing:-.2pt"> </span>verdieping,<span style="letter-spacing:
        -.15pt"> </span>te<span style="letter-spacing:-.2pt"> </span>Rotterdam</span></p><p></p><p>

        </p><p class="MsoBodyText" style="margin-top:0in;margin-right:36.65pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt"><span lang="NL">Mocht de afspraak u
        toch niet schikken, dan verzoeken wij u dringend dit minimaal 24 uur van<span style="letter-spacing:.05pt"> </span>tevoren te melden. U dient dan telefonisch
        contact op te nemen met bovenstaand telefoonnummer,<span style="letter-spacing:
        -2.6pt"> </span>voor<span style="letter-spacing:-.1pt"> </span>het<span style="letter-spacing:-.05pt"> </span>maken<span style="letter-spacing:-.05pt">
        </span>van<span style="letter-spacing:-.05pt"> </span>een<span style="letter-spacing:-.05pt"> </span>nieuwe<span style="letter-spacing:-.05pt">
        </span>afspraak.</span></p><p class="MsoBodyText" style="margin-top:.1pt"><span lang="NL" style="font-size:
        10.0pt;mso-bidi-font-size:11.0pt">&nbsp;</span></p><p class="MsoBodyText" style="margin-left:33.0pt"><span lang="NL">Met<span style="letter-spacing:-.25pt"> </span>vriendelijke<span style="letter-spacing:
        -.2pt"> </span>groet,</span></p><p class="MsoBodyText" style="margin-left:33.0pt"><img style="width: 115.083px; height: 115.083px;" data-filename="16870132280.png" src="/upload/16962567940.png"><span lang="NL"><br></span></p><p class="MsoBodyText" style="margin-top:.05pt;margin-right:0in;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt"><span lang="NL">MiSi<span style="letter-spacing:-.3pt"> </span>Neuropsy<span style="letter-spacing:-.3pt">
        </span>Zorgadministratie</span></p><h1 style="margin-top:9.05pt;margin-right:0in;margin-bottom:0in;margin-left:
        33.0pt;margin-bottom:.0001pt"><span lang="NL">Belangrijke<span style="letter-spacing:
        -.35pt"> </span>informatie:</span></h1><p class="MsoBodyText" style="margin-top:.1pt;margin-right:17.15pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt"><span lang="NL">Behandelcontacten
        met MiSi Neuropsy, worden gedeclareerd bij uw zorgverzekeraar. Afhankelijk van<span style="letter-spacing:-2.6pt"> </span>eerder gemaakte zorgkosten kan dit ten
        koste gaan van uw verplichte eigen risico. Uw zorgverzekeraar<span style="letter-spacing:-2.6pt"> </span>brengt dit bedrag bij u in rekening. Wat
        betreft de vergoeding van uw behandeling door uw<span style="letter-spacing:
        .05pt"> </span>ziektekostenverzekering<span style="letter-spacing:-.2pt"> </span>adviseren<span style="letter-spacing:-.15pt"> </span>wij<span style="letter-spacing:-.2pt"> </span>u<span style="letter-spacing:-.15pt"> </span>om<span style="letter-spacing:-.2pt"> </span>uw<span style="letter-spacing:-.15pt"> </span>verzekeringspolis<span style="letter-spacing:
        -.2pt"> </span>of<span style="letter-spacing:-.15pt"> </span>uw<span style="letter-spacing:-.2pt"> </span>verzekeraar<span style="letter-spacing:
        -.15pt"> </span>te<span style="letter-spacing:-.2pt"> </span>raadplegen.</span></p><p class="MsoBodyText" style="margin-top:0in;margin-right:36.95pt;margin-bottom:
        0in;margin-left:33.0pt;margin-bottom:.0001pt"><span style="mso-ignore:vglayout;position:
        absolute;z-index:487538171;left:0px;margin-left:205px;margin-top:131px;
        width:13px;height:9px"><img width="13" height="9" src="file:///C:%5CUsers%5CYounus%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image002.gif"></span><span style="mso-ignore:vglayout;position:
        absolute;z-index:487538683;left:0px;margin-left:394px;margin-top:131px;
        width:13px;height:9px"><img width="13" height="9" src="file:///C:%5CUsers%5CYounus%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image002.gif"></span><span style="mso-ignore:vglayout;position:
        absolute;z-index:487539195;left:0px;margin-left:497px;margin-top:131px;
        width:13px;height:9px"><img width="13" height="9" src="file:///C:%5CUsers%5CYounus%5CAppData%5CLocal%5CTemp%5Cmsohtmlclip1%5C01%5Cclip_image002.gif"></span><span style="mso-ignore:vglayout;position:
        absolute;z-index:487540219;left:0px;margin-left:653px;margin-top:121px;
        width:66px;height:28px"></span><span lang="NL">Wij kunnen u ook hierbij helpen bij uw eerste
        bezoek. Wanneer u uw afspraak niet kunt nakomen,<span style="letter-spacing:
        -2.6pt"> </span>dient u ons dit minimaal 24 uur vooraf te laten weten. Voor
        afspraken die niet of niet op tijd zijn<span style="letter-spacing:.05pt"> </span>afgemeld<span style="letter-spacing:-.1pt"> </span>kunnen<span style="letter-spacing:-.05pt">
        </span>kosten<span style="letter-spacing:-.05pt"> </span>in<span style="letter-spacing:-.1pt"> </span>rekening<span style="letter-spacing:-.05pt">
        </span>gebracht<span style="letter-spacing:-.05pt"> </span>worden.</span></p><p></p><p></p></p><!--[if !mso]>
        <style>
        v\:* {behavior:url(#default#VML);}
        o\:* {behavior:url(#default#VML);}
        w\:* {behavior:url(#default#VML);}
        .shape {behavior:url(#default#VML);}
        </style>
        <![endif]--><!--[if gte mso 9]><xml>
         <w:WordDocument>
          <w:View>Normal</w:View>
          <w:Zoom>0</w:Zoom>
          <w:TrackMoves>false</w:TrackMoves>
          <w:TrackFormatting/>
          <w:PunctuationKerning/>
          <w:ValidateAgainstSchemas/>
          <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
          <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
          <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
          <w:DoNotPromoteQF/>
          <w:LidThemeOther>EN-US</w:LidThemeOther>
          <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
          <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
          <w:Compatibility>
           <w:BreakWrappedTables/>
           <w:SnapToGridInCell/>
           <w:WrapTextWithPunct/>
           <w:UseAsianBreakRules/>
           <w:DontGrowAutofit/>
           <w:SplitPgBreakAndParaMark/>
           <w:EnableOpenTypeKerning/>
           <w:DontFlipMirrorIndents/>
           <w:OverrideTableStyleHps/>
          </w:Compatibility>
          <w:DoNotOptimizeForBrowser/>
          <m:mathPr>
           <m:mathFont m:val="Cambria Math"/>
           <m:brkBin m:val="before"/>
           <m:brkBinSub m:val="&#45;-"/>
           <m:smallFrac m:val="off"/>
           <m:dispDef/>
           <m:lMargin m:val="0"/>
           <m:rMargin m:val="0"/>
           <m:defJc m:val="centerGroup"/>
           <m:wrapIndent m:val="1440"/>
           <m:intLim m:val="subSup"/>
           <m:naryLim m:val="undOvr"/>
          </m:mathPr></w:WordDocument>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
          DefSemiHidden="false" DefQFormat="false" DefPriority="99"
          LatentStyleCount="371">
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="Normal"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="heading 1"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
          <w:LsdException Locked="false" Priority="9" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index 9"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 1"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 2"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 3"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 4"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 5"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 6"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 7"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 8"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" Name="toc 9"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="header"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footer"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="index heading"/>
          <w:LsdException Locked="false" Priority="35" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="caption"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of figures"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="envelope return"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="footnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="line number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="page number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote reference"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="endnote text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="table of authorities"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="macro"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="toa heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Bullet 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Number 5"/>
          <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Closing"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Signature"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" Name="Default Paragraph Font"/>
          <w:LsdException Locked="false" Priority="1" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="Body Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="List Continue 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Message Header"/>
          <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Salutation"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Date"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text First Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Note Heading"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Body Text Indent 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Block Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Hyperlink"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="FollowedHyperlink"/>
          <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
          <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Document Map"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Plain Text"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="E-mail Signature"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Top of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Bottom of Form"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal (Web)"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Acronym"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Address"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Cite"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Code"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Definition"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Keyboard"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Preformatted"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Sample"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Typewriter"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="HTML Variable"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Normal Table"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="annotation subject"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="No List"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Outline List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Simple 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Classic 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Colorful 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Columns 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Grid 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 4"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 5"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 6"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 7"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table List 8"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table 3D effects 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Contemporary"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Elegant"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Professional"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Subtle 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 1"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 2"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Web 3"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Balloon Text"/>
          <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
          <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
           Name="Table Theme"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
          <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
          <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
          <w:LsdException Locked="false" Priority="34" QFormat="true"
           Name="List Paragraph"/>
          <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
          <w:LsdException Locked="false" Priority="30" QFormat="true"
           Name="Intense Quote"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
          <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
          <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
          <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
          <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
          <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
          <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
          <w:LsdException Locked="false" Priority="19" QFormat="true"
           Name="Subtle Emphasis"/>
          <w:LsdException Locked="false" Priority="21" QFormat="true"
           Name="Intense Emphasis"/>
          <w:LsdException Locked="false" Priority="31" QFormat="true"
           Name="Subtle Reference"/>
          <w:LsdException Locked="false" Priority="32" QFormat="true"
           Name="Intense Reference"/>
          <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
          <w:LsdException Locked="false" Priority="37" SemiHidden="true"
           UnhideWhenUsed="true" Name="Bibliography"/>
          <w:LsdException Locked="false" Priority="39" SemiHidden="true"
           UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
          <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
          <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
          <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
          <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
          <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
          <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
          <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="Grid Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="Grid Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="Grid Table 7 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
          <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
          <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 1"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 1"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 2"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 2"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 3"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 3"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 4"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 4"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 5"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 5"/>
          <w:LsdException Locked="false" Priority="46"
           Name="List Table 1 Light Accent 6"/>
          <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
          <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
          <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
          <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
          <w:LsdException Locked="false" Priority="51"
           Name="List Table 6 Colorful Accent 6"/>
          <w:LsdException Locked="false" Priority="52"
           Name="List Table 7 Colorful Accent 6"/>
         </w:LatentStyles>
        </xml><![endif]--><!--[if gte mso 10]>
        <style>
         /* Style Definitions */
         table.MsoNormalTable
            {mso-style-name:"Table Normal";
            mso-tstyle-rowband-size:0;
            mso-tstyle-colband-size:0;
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-parent:"";
            mso-padding-alt:0in 5.4pt 0in 5.4pt;
            mso-para-margin:0in;
            mso-para-margin-bottom:.0001pt;
            mso-pagination:none;
            text-autospace:none;
            font-size:11.0pt;
            font-family:"Calibri","sans-serif";
            mso-ascii-font-family:Calibri;
            mso-ascii-theme-font:minor-latin;
            mso-hansi-font-family:Calibri;
            mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:"Times New Roman";
            mso-bidi-theme-font:minor-bidi;}
        </style>
        <![endif]--><!--[if gte mso 9]><xml>
         <o:shapedefaults v:ext="edit" spidmax="1030"/>
        </xml><![endif]--><!--[if gte mso 9]><xml>
         <o:shapelayout v:ext="edit">
          <o:idmap v:ext="edit" data="1"/>
         </o:shapelayout></xml><![endif]-->
        ']);
    }
}
