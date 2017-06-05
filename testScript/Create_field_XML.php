<?php

try{
require_once 'Classes/PHPExcel.php';
include 'Classes/PHPExcel/IOFactory.php';


$inputFileName = "ListColumn.xlsx"; 
$inputFileType = PHPExcel_IOFactory::identify($inputFileName); 
$objReader = PHPExcel_IOFactory::createReader($inputFileType); 
$objReader->setReadDataOnly(true); 
$objPHPExcel = $objReader->load($inputFileName); 


$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
$highestRow = $objWorksheet->getHighestRow();
$highestColumn = $objWorksheet->getHighestColumn();
$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
$headingsArray = $headingsArray[1];

 

$r = -1;
$namedDataArray = array();

for ($row = 2; $row <= $highestRow; ++$row) {
	$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
		if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
		++$r;
			foreach($headingsArray as $columnKey => $columnHeading) {
				$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
			}
		}
}

//echo '<pre>';

//var_dump($namedDataArray);

//echo '</pre><hr />';

}catch(Exception $e){
	echo "Error";
}

?>

<?php
$string = <<<XML
<?xml version='1.0'?> 
<document>
 <title>Forty What?</title>
 <from>Joe</from>
 <to>Jane</to>
 <body>
  I know that's the answer -- but what's the question?
 </body>
</document>
XML;

//file_put_contents("myxmlfile.xml", $string);
//$xml = simplexml_load_string($string);

//print_r($xml);
?>

<table width="500" border="1">
	<tr>
		<td>TABLE_NAME</td>
		<td>COLUMN_NAME</td>
		<td>DATA_LENGTH</td>
	</tr>

<?php $stringnaja = "None"; $stringnajaja = "None2"; $count=0; $word=""; $check=""; $temp = ""; $countDialog=1;  $sDialog=""; $stDialog=""; $listDialog=""; 
$ifDialog ="";
?>
<?php  foreach ($namedDataArray as $result) {  ?>

<tr>
	<td><?php echo $result["TABLE_NAME"];?></td>
	<td><?php echo $result["COLUMN_NAME"];?></td>
	<td><?php echo $result["DATA_LENGTH"];?></td>
	
</tr>

<?php 

?>

<?php     
      if($count==0){
// hcabinet + genaral + database + Hfields + StringField + Filename + Ffields + HfcProfile + FCPRFILE + FfcProfile + 
// HDialog + shdialog + sDialog + searchDialogfilename + sfdialog +/ sthdialog + stdialog + stfdialog + reshdialog + lvhDialog +lvDialog + lvDialogfilename+ lvfDialog 
// +ifhDialog + infoDialog + ifDialogfilename + iffDialog + resfdialog// +  FDialog		  
// [ H,F Cabinet ]		  

  $HCabinet = '<FileCabinet version="691" organization="Peters Engineering" fid="2" oid="1" oguid="a80557d9-6870-4702-af8a-406e863e8dbd">
  <General>
  </General>
  <DataBase >  
  </DataBase>
  <Documents>
  </Documents>
  <Fields>';

// [ String Field XML] 	// $word	
		  
		  $str = $result["COLUMN_NAME"];
		  echo $str;
		 if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED" || $result["DATA_TYPE"]=="Text" ){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE" || $result["DATA_TYPE"]=="Date" ){
			 $temp  =  '<UserField dwType="Date" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER" || $result["DATA_TYPE"]=="Numeric"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None" scale="0">Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 }
	
		
		  $word = $temp;
		  
		  $count++;
		  $countDialog++;
		  $check = $result["TABLE_NAME"];
		  
	  }else{
		  
		  if ( $check == $result["TABLE_NAME"]){
// [ String Field XML]
			  
		       $str = $result["COLUMN_NAME"];
			  if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED" || $result["DATA_TYPE"]=="Text"){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE" || $result["DATA_TYPE"]=="Date"){
			 $temp  =  '<UserField dwType="Date" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER" || $result["DATA_TYPE"]=="Numeric"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None" scale="0">Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 }
	
	
			  $word = $word.$temp ;		  
			  $countDialog++;
		  }else{ 

			  $FCabinet = '<SystemField dwType="Int" dwLength="-1" dbName="DWVERID" displayName="Version ID" guid="d41e3952-38e5-4047-8d0d-ec2b328304d7">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWSYSVERSION" displayName="Version" guid="16b564b4-6fdb-473a-b129-f210123297db">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWFLAGSEX" displayName="Extended Flags" guid="1fdffeb4-d2f9-4c0c-99c7-3a4c2f575876">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="-1" dbName="DWSTORAGEACCESS" displayName="Storage Access" guid="5e1eaf33-a870-48bc-8a52-5ca1b2ba6582">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWEXTENSION" displayName="Extension" guid="d1544e52-f809-4864-8cf8-a297afbfca35">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWHEADERSIZE" displayName="Header Size" guid="a41a4b61-6eea-470b-911a-794340f180b6">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWDOCSIZE" displayName="Document Size" guid="5d14a9c4-cc73-4bd0-a6b1-80760c3d8f1b">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWOFFSET" displayName="Offset" guid="5bcd3525-b397-4c17-b638-af0bc089a675">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWFLAGS" displayName="Flags" guid="244d85e2-7a1f-4920-949b-f6e5a1bc4940">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="-1" dbName="DWINTELLIXHINTS" displayName="Intellix hints" guid="fd045779-e222-4f55-83eb-5b521b5adcb6">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWCONTENTETAG" displayName="DWCONTENTETAG" guid="e23f0a21-2382-43a2-b259-0d8df1fa6ebc">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWANNOETAG" displayName="DWANNOETAG" guid="d89aca04-ad7a-427f-aa15-5dccdd7791d7">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWDOCID" displayName="Doc ID" guid="b3678daf-b636-458e-955f-45b073f01691">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWPAGECOUNT" displayName="File Count" guid="4449b335-92f6-42b1-8ece-e1bfffcf7175">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWDISKNO" displayName="Disk Number" guid="9a10d213-1307-432d-9f3e-1b88b88c1b11">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWSTOREDATETIME" displayName="Store Date" guid="e75a20e8-9053-4607-8ede-8ec5c9651bd4">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWSTOREUSER" displayName="Store User" guid="20c7650a-95f4-4a61-b5fc-0d66817eaeb8">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWMODDATETIME" displayName="Modification Date" guid="954b280a-2809-4fd5-befa-588797a2fed1">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWMODUSER" displayName="Modification User" guid="2e75cfa8-b70c-4550-9cb4-4a1ea08db483">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWLASTACCESSDATETIME" displayName="Last Access Date" guid="1cc2d5b8-e6f0-4d67-a129-2da3ed6d60dd">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWLASTACCESSUSER" displayName="Last Access User" guid="a10e5049-4a75-4730-887d-bb5a782b06c7">
    </SystemField>
    <FullTextField dwType="TextVar" dwLength="-1" dbName="DocuWareFulltext" displayName="Fulltext" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="4b0fed23-c901-4da5-97ad-a69570186d62">
      <DBType indexed="false" length="0" uniqueType="None">String</DBType>
      <FixedEntry>No</FixedEntry>
    </FullTextField>
  </Fields>
  <FCProfiles>
    <FCProfile version="5.1.0.1" fpid="11" fid="2" guid="b6c8d37a-3754-4fbf-bc27-66ea748e46da" name="Delete" type="Delete" useIndexFilter="false" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4">
      <GeneralRights>General_DeleteDocuments</GeneralRights>
      <AnnotationRights>0</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
        </FieldRight>
        <FieldRight right="Field_Read">
        </FieldRight>
        <FieldRight right="Field_Search">
        </FieldRight>
        <FieldRight right="Field_Write">
        </FieldRight>
      </FieldRights>
      <AssignedRoles>
        <Role rid="7" guid="e50fe396-bbbc-4995-a9fb-b2352c4ff726" name="HR Director" />
      </AssignedRoles>
    </FCProfile>
    <FCProfile version="5.1.0.1" fpid="10" fid="2" guid="cb5030a7-2167-4a97-9968-43b7bdbe6bdc" name="Edit" type="Edit" useIndexFilter="false" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4">
      <GeneralRights>General_Store, General_Append, General_Edit, General_EditDocuments, General_Checkout</GeneralRights>
      <AnnotationRights>Annotation_New, Annotation_Delete, Annotation_All, Annotation_Hide, Annotation_Stamp_New, Annotation_Stamp_Hide</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
        </FieldRight>
        <FieldRight right="Field_Read">
        </FieldRight>
        <FieldRight right="Field_Search">
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
      </FieldRights>
      <AssignedRoles>
        <Role rid="7" guid="e50fe396-bbbc-4995-a9fb-b2352c4ff726" name="HR Director" />
      </AssignedRoles>
    </FCProfile>
    <FCProfile version="5.1.0.1" fpid="12" fid="2" guid="5633594f-4922-4066-8805-c1654d929314" name="I - Read own documents" type="Custom" useIndexFilter="true" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4">
      <IndexFilters>
        <SearchFilter format="Extended" operation="And">
          <ExtendedStatement>&lt;?xml version="1.0" encoding="utf-16"?&gt;&lt;QueryBuilderSettings xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://dev.docuware.com/settings/web/querybuilder"&gt;&lt;Root&gt;&lt;Operation&gt;And&lt;/Operation&gt;&lt;Conditions xsi:type="Condition"&gt;&lt;DBName&gt;EMPLOYEE&lt;/DBName&gt;&lt;Provider xsi:type="TextConditionProvider"&gt;&lt;Operation&gt;Equal&lt;/Operation&gt;&lt;Value /&gt;&lt;SystemFunction&gt;CurrentUserLongName&lt;/SystemFunction&gt;&lt;/Provider&gt;&lt;/Conditions&gt;&lt;/Root&gt;&lt;/QueryBuilderSettings&gt;</ExtendedStatement>
        </SearchFilter>
      </IndexFilters>
      <GeneralRights>General_Search, General_DisplayDocument, General_Export</GeneralRights>
      <AnnotationRights>0</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
        </FieldRight>
      </FieldRights>
      <AssignedRoles>
        <Role rid="3" guid="5685fd50-e833-4933-bef6-d29ed917f81b" name="Default Organization Role" />
      </AssignedRoles>
    </FCProfile>
    <FCProfile version="5.1.0.1" fpid="13" fid="2" guid="fa9cc950-01bd-4745-ae15-899c6080c95d" name="I - Read Sales and Markting" type="Custom" useIndexFilter="true" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4">
      <IndexFilters>
        <SearchFilter format="Extended" operation="And">
          <ExtendedStatement>&lt;?xml version="1.0" encoding="utf-16"?&gt;&lt;QueryBuilderSettings xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://dev.docuware.com/settings/web/querybuilder"&gt;&lt;Root&gt;&lt;Operation&gt;Or&lt;/Operation&gt;&lt;Conditions xsi:type="Condition"&gt;&lt;DBName&gt;DEPARTMENT&lt;/DBName&gt;&lt;Provider xsi:type="TextConditionProvider"&gt;&lt;Operation&gt;Equal&lt;/Operation&gt;&lt;Value&gt;Sales&lt;/Value&gt;&lt;SystemFunction&gt;None&lt;/SystemFunction&gt;&lt;/Provider&gt;&lt;/Conditions&gt;&lt;Conditions xsi:type="Condition"&gt;&lt;DBName&gt;DEPARTMENT&lt;/DBName&gt;&lt;Provider xsi:type="TextConditionProvider"&gt;&lt;Operation&gt;Equal&lt;/Operation&gt;&lt;Value&gt;Markting&lt;/Value&gt;&lt;SystemFunction&gt;None&lt;/SystemFunction&gt;&lt;/Provider&gt;&lt;/Conditions&gt;&lt;/Root&gt;&lt;/QueryBuilderSettings&gt;</ExtendedStatement>
        </SearchFilter>
      </IndexFilters>
      <GeneralRights>General_Search, General_DisplayDocument, General_Export</GeneralRights>
      <AnnotationRights>0</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
        </FieldRight>
      </FieldRights>
      <AssignedRoles>
        <Role rid="11" guid="3bef1fbb-c1c2-49b5-bd9f-4a94a2799caa" name="Sales Director" />
      </AssignedRoles>
    </FCProfile>
    <FCProfile version="5.1.0.1" fpid="8" fid="2" guid="f146d016-7f47-4071-8284-e8660e43ffd8" name="Owner" type="Owner" useIndexFilter="false" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4">
      <GeneralRights>Admin_Owner, Admin_ModifyRight, Admin_Operator, Admin_EditDialogs, Admin_MigrationAdministration, General_Store, General_Append, General_Search, General_Edit, General_DisplayDocument, General_EditDocuments, General_DeleteDocuments, General_Export, General_AppendToReadOnly, General_ChangeToReadOnly, General_Checkout</GeneralRights>
      <AnnotationRights>Annotation_New, Annotation_Delete, Annotation_All, Annotation_Hide, Annotation_Stamp_New, Annotation_Stamp_Hide</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
      </FieldRights>
      <AssignedUsers>
        <User uID="1" uGuid="d6bf02e3-86a5-4d0a-975c-faf9734dc908" name="admin" organizationGuid="00000000-0000-0000-0000-000000000000" />
      </AssignedUsers>
    </FCProfile>
    <FCProfile version="5.1.0.1" fpid="9" fid="2" guid="8c5b3e2c-28fa-4068-bd3c-58a71d60aef8" name="Read" type="Read" useIndexFilter="false" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4">
      <GeneralRights>General_Search, General_DisplayDocument, General_Export</GeneralRights>
      <AnnotationRights>0</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,DEPARTMENT,EMPLOYEE,LAST_NAME,FIRST_NAME,DATE_OF_BIRTH,DOCUMENT_TYPE,SUBJECT,E_MAIL,DUE_DATE,PERSONNEL_NUMBER,STATUS,NEXT_USER,SSN_,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
        </FieldRight>
      </FieldRights>
      <AssignedRoles>
        <Role rid="7" guid="e50fe396-bbbc-4995-a9fb-b2352c4ff726" name="HR Director" />
      </AssignedRoles>
    </FCProfile>
  </FCProfiles>
  <Dialogs>
    <SearchDialogs>
      <SearchDialog setID="26" fID="2" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" guid="6c75d60e-4143-48d6-b942-5b68606b85de" name="Search" default="true" usage="NormalClients" version="5.1.0.1">
        <Properties resultListGuid="3eb40354-520d-4920-acf5-680d6329c7e1" />
        <DialogFields>
          <SearchDialogField name="DEPARTMENT" displayName="Department" visible="true" orderNumber="1" guid="14bde487-4aba-4350-a62d-0ab0a79c0cd1" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="EMPLOYEE" displayName="Employee" visible="true" orderNumber="2" guid="8710d56e-7eab-4763-9c31-9fca325394a6" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="LAST_NAME" displayName="Last Name" visible="true" orderNumber="3" guid="ed833883-bf62-4c33-81a6-0a2eceb30e65" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="FIRST_NAME" displayName="First Name" visible="true" orderNumber="4" guid="c5561e05-1aa0-4650-b09c-585ffa7f5683" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="DATE_OF_BIRTH" displayName="Date of Birth" visible="true" orderNumber="5" guid="640b0218-48a8-4a50-bff6-43e21c70bab8" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="DOCUMENT_TYPE" displayName="Document Type" visible="true" orderNumber="6" guid="dbc63316-dea1-42f0-99fc-a4a2c0cdad3c" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="SUBJECT" displayName="Subject" visible="true" orderNumber="7" guid="0b54b4fd-0407-4b49-88f0-f73f6a9fa468" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="E_MAIL" displayName="E-Mail" visible="true" orderNumber="8" guid="ac93439c-5197-4fca-b92a-75fcb8a4fa0d" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="DUE_DATE" displayName="Due Date" visible="true" orderNumber="9" guid="4c51a6c3-6770-4094-9d25-ce122edc9ca5" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="PERSONNEL_NUMBER" displayName="Personnel Number" visible="true" orderNumber="10" guid="a18ba834-db24-4358-a2e2-820229dd1692" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="STATUS" displayName="Status" visible="true" orderNumber="11" guid="90807339-6917-496e-a380-daf8e5a0543c" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="NEXT_USER" displayName="Next User" visible="true" orderNumber="12" guid="e4bf67c8-c8d8-4f57-b279-5038d642d066" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="SSN_" displayName="SSN#" visible="true" orderNumber="13" guid="4f0c4457-2e77-48d4-9549-557a75bf9a73" allowFiltering="true">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="DocuWareFulltext" displayName="Fulltext" visible="true" orderNumber="14" guid="4b0fed23-c901-4da5-97ad-a69570186d62" allowFiltering="false">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
        </DialogFields>
      </SearchDialog>
    </SearchDialogs>
    <StoreDialogs>
      <StoreDialog setID="27" fID="2" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" guid="b1f6c450-1ebd-4c98-9fa7-7d75582a39de" name="Store" default="true" usage="NormalClients" version="5.1.0.1">
        <DialogFields>
          <StoreDialogField name="DEPARTMENT" displayName="Department" visible="true" orderNumber="1" guid="14bde487-4aba-4350-a62d-0ab0a79c0cd1" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="1" allowInternalSelectList="false">
                <AssignedMultiFieldSelectList guid="77d15d5b-b6f3-4f81-8a6d-4474607b99b0" valueField="Department">
                  <Filters>
                    <System.Guid DictionaryEntryKey="Employee">8710d56e-7eab-4763-9c31-9fca325394a6</System.Guid>
                  </Filters>
                </AssignedMultiFieldSelectList>
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="EMPLOYEE" displayName="Employee" visible="true" orderNumber="2" guid="8710d56e-7eab-4763-9c31-9fca325394a6" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="1" allowInternalSelectList="false">
                <AssignedMultiFieldSelectList guid="77d15d5b-b6f3-4f81-8a6d-4474607b99b0" valueField="Employee">
                  <Filters>
                    <System.Guid DictionaryEntryKey="Department">14bde487-4aba-4350-a62d-0ab0a79c0cd1</System.Guid>
                  </Filters>
                </AssignedMultiFieldSelectList>
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="LAST_NAME" displayName="Last Name" visible="true" orderNumber="3" guid="ed833883-bf62-4c33-81a6-0a2eceb30e65" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="FIRST_NAME" displayName="First Name" visible="true" orderNumber="4" guid="c5561e05-1aa0-4650-b09c-585ffa7f5683" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="DATE_OF_BIRTH" displayName="Date of Birth" visible="true" orderNumber="5" guid="640b0218-48a8-4a50-bff6-43e21c70bab8" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="DOCUMENT_TYPE" displayName="Document Type" visible="true" orderNumber="6" guid="dbc63316-dea1-42f0-99fc-a4a2c0cdad3c" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="SUBJECT" displayName="Subject" visible="true" orderNumber="7" guid="0b54b4fd-0407-4b49-88f0-f73f6a9fa468" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="E_MAIL" displayName="E-Mail" visible="true" orderNumber="8" guid="ac93439c-5197-4fca-b92a-75fcb8a4fa0d" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="DUE_DATE" displayName="Due Date" visible="true" orderNumber="9" guid="4c51a6c3-6770-4094-9d25-ce122edc9ca5" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="PERSONNEL_NUMBER" displayName="Personnel Number" visible="true" orderNumber="10" guid="a18ba834-db24-4358-a2e2-820229dd1692" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="STATUS" displayName="Status" visible="true" orderNumber="11" guid="90807339-6917-496e-a380-daf8e5a0543c" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="NEXT_USER" displayName="Next User" visible="true" orderNumber="12" guid="e4bf67c8-c8d8-4f57-b279-5038d642d066" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="SSN_" displayName="SSN#" visible="true" orderNumber="13" guid="4f0c4457-2e77-48d4-9549-557a75bf9a73" allowFiltering="true" selectListOnly="false" autonumberId="00000000-0000-0000-0000-000000000000">
            <FieldEntry>
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
        </DialogFields>
      </StoreDialog>
    </StoreDialogs>
    <ResultLists>
      <ResultList setID="28" fID="2" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" guid="3eb40354-520d-4920-acf5-680d6329c7e1" name="Result" default="true" usage="NormalClients" version="5.1.0.1">
        <Properties isCheckoutFunctionSet="false" storeDialog="00000000-0000-0000-0000-000000000000">
          <General resultListType="list" />
          <Functions>
            <Function type="LinkSearch" inToolBar="true" asButton="false" />
            <Function type="DisplayDocument" inToolBar="true" asButton="false" />
            <Function type="DisplayInfoBox" inToolBar="true" asButton="false" />
            <Function type="PrintSelectedDocument" inToolBar="true" asButton="false" />
            <Function type="DeleteSelectedDocument" inToolBar="true" asButton="false" />
            <Function type="CopyToBasket" inToolBar="true" asButton="false" />
            <Function type="Versions" inToolBar="true" asButton="false" />
            <Function type="Archive" inToolBar="true" asButton="false" />
            <Function type="AppendFromBasket" inToolBar="true" asButton="false" />
            <Function type="Web_Download" inToolBar="true" asButton="false" />
            <Function type="Web_DownloadAsPDFWithoutAnno" inToolBar="true" asButton="false" />
            <Function type="Web_DownloadAsPDF" inToolBar="true" asButton="false" />
            <Function type="Web_SendAsOriginal" inToolBar="true" asButton="false" />
            <Function type="Web_SendAsPDFWithoutAnno" inToolBar="true" asButton="false" />
            <Function type="Web_SendAsPDF" inToolBar="true" asButton="false" />
            <Function type="Web_SendAsHyperlink" inToolBar="true" asButton="false" />
            <Function type="Web_SendResultList" inToolBar="true" asButton="false" />
            <Function type="Web_EMailReply" inToolBar="true" asButton="false" />
            <Function type="Web_EMailReplyAll" inToolBar="true" asButton="false" />
            <Function type="Web_EMailForward" inToolBar="true" asButton="false" />
            <Function type="Web_ShowInSeparateViewer" inToolBar="true" asButton="false" />
            <Function type="Web_EditDocument" inToolBar="true" asButton="false" />
            <Function type="Web_ShowWorkflowHistory" inToolBar="true" asButton="false" />
            <Function type="Web_ExportToCSV" inToolBar="true" asButton="false" />
            <Function type="Web_CreateREQUEST" inToolBar="true" asButton="false" />
            <Function type="Web_ChangeIndexOfMultipleDocuments" inToolBar="true" asButton="false" />
          </Functions>
        </Properties>
        <ListView>
          <General displayFirstDocumentImmediately="false">
            <SortOrder>
              <Field fieldGuid="e75a20e8-9053-4607-8ede-8ec5c9651bd4" fieldID="-2147483648" field="Store Date" ascending="false" />
            </SortOrder>
          </General>
          <FieldLayouts>
            <FieldLayout visible="true" field="DEPARTMENT" fieldGuid="14bde487-4aba-4350-a62d-0ab0a79c0cd1" columnNumber="1">
              <Label letters="standard" label="Department" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="EMPLOYEE" fieldGuid="8710d56e-7eab-4763-9c31-9fca325394a6" columnNumber="2">
              <Label letters="standard" label="Employee" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="LAST_NAME" fieldGuid="ed833883-bf62-4c33-81a6-0a2eceb30e65" columnNumber="3">
              <Label letters="standard" label="Last Name" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="FIRST_NAME" fieldGuid="c5561e05-1aa0-4650-b09c-585ffa7f5683" columnNumber="4">
              <Label letters="standard" label="First Name" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="DATE_OF_BIRTH" fieldGuid="640b0218-48a8-4a50-bff6-43e21c70bab8" columnNumber="5">
              <Label letters="standard" label="Date of Birth" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="DOCUMENT_TYPE" fieldGuid="dbc63316-dea1-42f0-99fc-a4a2c0cdad3c" columnNumber="6">
              <Label letters="standard" label="Document Type" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="SUBJECT" fieldGuid="0b54b4fd-0407-4b49-88f0-f73f6a9fa468" columnNumber="7">
              <Label letters="standard" label="Subject" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="E_MAIL" fieldGuid="ac93439c-5197-4fca-b92a-75fcb8a4fa0d" columnNumber="8">
              <Label letters="standard" label="E-Mail" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="DUE_DATE" fieldGuid="4c51a6c3-6770-4094-9d25-ce122edc9ca5" columnNumber="9">
              <Label letters="standard" label="Due Date" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="PERSONNEL_NUMBER" fieldGuid="a18ba834-db24-4358-a2e2-820229dd1692" columnNumber="10">
              <Label letters="standard" label="Personnel Number" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS" fieldGuid="90807339-6917-496e-a380-daf8e5a0543c" columnNumber="11">
              <Label letters="standard" label="Status" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="NEXT_USER" fieldGuid="e4bf67c8-c8d8-4f57-b279-5038d642d066" columnNumber="12">
              <Label letters="standard" label="Next User" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="SSN_" fieldGuid="4f0c4457-2e77-48d4-9549-557a75bf9a73" columnNumber="13">
              <Label letters="standard" label="SSN#" />
              <FieldCell textWrap="false" />
            </FieldLayout>
          </FieldLayouts>
        </ListView>
        <InfoDialog version="5.1.0.1" fID="2" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" guid="3eb40354-520d-4920-acf5-680d6329c7e1" name="Result" default="true" usage="NormalClients">
          <FieldLayouts>
            <FieldLayout visible="true" field="DEPARTMENT" fieldGuid="14bde487-4aba-4350-a62d-0ab0a79c0cd1" allowEdit="true" columnNumber="1" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Department" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="EMPLOYEE" fieldGuid="8710d56e-7eab-4763-9c31-9fca325394a6" allowEdit="true" columnNumber="2" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Employee" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="LAST_NAME" fieldGuid="ed833883-bf62-4c33-81a6-0a2eceb30e65" allowEdit="true" columnNumber="3" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Last Name" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="FIRST_NAME" fieldGuid="c5561e05-1aa0-4650-b09c-585ffa7f5683" allowEdit="true" columnNumber="4" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="First Name" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DATE_OF_BIRTH" fieldGuid="640b0218-48a8-4a50-bff6-43e21c70bab8" allowEdit="true" columnNumber="5" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Date of Birth" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DOCUMENT_TYPE" fieldGuid="dbc63316-dea1-42f0-99fc-a4a2c0cdad3c" allowEdit="true" columnNumber="6" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Document Type" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="SUBJECT" fieldGuid="0b54b4fd-0407-4b49-88f0-f73f6a9fa468" allowEdit="true" columnNumber="7" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Subject" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="E_MAIL" fieldGuid="ac93439c-5197-4fca-b92a-75fcb8a4fa0d" allowEdit="true" columnNumber="8" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="E-Mail" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DUE_DATE" fieldGuid="4c51a6c3-6770-4094-9d25-ce122edc9ca5" allowEdit="true" columnNumber="9" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Due Date" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="PERSONNEL_NUMBER" fieldGuid="a18ba834-db24-4358-a2e2-820229dd1692" allowEdit="true" columnNumber="10" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Personnel Number" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS" fieldGuid="90807339-6917-496e-a380-daf8e5a0543c" allowEdit="true" columnNumber="11" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Status" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="NEXT_USER" fieldGuid="e4bf67c8-c8d8-4f57-b279-5038d642d066" allowEdit="true" columnNumber="12" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Next User" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="SSN_" fieldGuid="4f0c4457-2e77-48d4-9549-557a75bf9a73" allowEdit="true" columnNumber="13" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="SSN#" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
          </FieldLayouts>
        </InfoDialog>
        <ViewerDialog version="5.1.0.1" fID="2" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" guid="3eb40354-520d-4920-acf5-680d6329c7e1" name="Result" default="true" usage="NormalClients" cachedDocuments="0" prefetchedDocuments="0" prefetchedFiles="0" prefetchedPages="0" mode="AdHokEditMode" zoomFactor="100" markFulltext="true" />
      </ResultList>
      <ResultList setID="29" fID="2" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" guid="893f4c25-f412-4161-86b3-96212e4bf6a2" name="Dossier by name" default="false" usage="NormalClients" version="5.1.0.1">
        <Properties isCheckoutFunctionSet="false" storeDialog="b1f6c450-1ebd-4c98-9fa7-7d75582a39de">
          <General resultListType="tree" />
          <Functions>
            <Function type="LinkSearch" inToolBar="true" asButton="false" />
            <Function type="DisplayDocument" inToolBar="true" asButton="false" />
            <Function type="DisplayInfoBox" inToolBar="true" asButton="false" />
            <Function type="PrintSelectedDocument" inToolBar="true" asButton="false" />
            <Function type="DeleteSelectedDocument" inToolBar="true" asButton="false" />
            <Function type="CopyToBasket" inToolBar="true" asButton="false" />
            <Function type="Versions" inToolBar="true" asButton="false" />
            <Function type="Archive" inToolBar="true" asButton="false" />
            <Function type="AppendFromBasket" inToolBar="true" asButton="false" />
            <Function type="Web_Download" inToolBar="true" asButton="false" />
            <Function type="Web_DownloadAsPDFWithoutAnno" inToolBar="true" asButton="false" />
            <Function type="Web_DownloadAsPDF" inToolBar="true" asButton="false" />
            <Function type="Web_SendAsOriginal" inToolBar="true" asButton="false" />
            <Function type="Web_SendAsPDFWithoutAnno" inToolBar="true" asButton="false" />
            <Function type="Web_SendAsPDF" inToolBar="true" asButton="false" />
            <Function type="Web_SendAsHyperlink" inToolBar="true" asButton="false" />
            <Function type="Web_SendResultList" inToolBar="true" asButton="false" />
            <Function type="Web_EMailReply" inToolBar="true" asButton="false" />
            <Function type="Web_EMailReplyAll" inToolBar="true" asButton="false" />
            <Function type="Web_EMailForward" inToolBar="true" asButton="false" />
            <Function type="Web_ShowInSeparateViewer" inToolBar="true" asButton="false" />
            <Function type="Web_EditDocument" inToolBar="true" asButton="false" />
            <Function type="Web_ShowWorkflowHistory" inToolBar="true" asButton="false" />
            <Function type="Web_ExportToCSV" inToolBar="true" asButton="false" />
            <Function type="Web_CreateREQUEST" inToolBar="true" asButton="false" />
            <Function type="Web_ChangeIndexOfMultipleDocuments" inToolBar="true" asButton="false" />
          </Functions>
        </Properties>
        <TreeView>
          <FieldLayouts>
            <FieldLayout visible="true" field="LAST_NAME" fieldGuid="ed833883-bf62-4c33-81a6-0a2eceb30e65" type="HierarchyField" columnPosition="0" linePosition="1">
              <Label letters="standard" label="Last Name" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="false">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="FIRST_NAME" fieldGuid="c5561e05-1aa0-4650-b09c-585ffa7f5683" type="HierarchyField" columnPosition="0" linePosition="2">
              <Label letters="standard" label="First Name" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="false">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DOCUMENT_TYPE" fieldGuid="dbc63316-dea1-42f0-99fc-a4a2c0cdad3c" type="HierarchyField" columnPosition="0" linePosition="3">
              <Label letters="standard" label="Document Type" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="false">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="SUBJECT" fieldGuid="0b54b4fd-0407-4b49-88f0-f73f6a9fa468" type="InfoField" columnPosition="1" linePosition="0">
              <Label letters="standard" label="Subject" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="false">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DUE_DATE" fieldGuid="4c51a6c3-6770-4094-9d25-ce122edc9ca5" type="InfoField" columnPosition="2" linePosition="0">
              <Label letters="standard" label="Due Date" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="false">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="PERSONNEL_NUMBER" fieldGuid="a18ba834-db24-4358-a2e2-820229dd1692" type="InfoField" columnPosition="3" linePosition="0">
              <Label letters="standard" label="Personnel Number" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="false">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DEPARTMENT" fieldGuid="14bde487-4aba-4350-a62d-0ab0a79c0cd1" type="InfoField" columnPosition="4" linePosition="0">
              <Label letters="standard" label="Department" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="false">
              </SelectLists>
            </FieldLayout>
          </FieldLayouts>
        </TreeView>
        <InfoDialog version="5.1.0.1" fID="2" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" guid="893f4c25-f412-4161-86b3-96212e4bf6a2" name="Dossier by name" default="false" usage="NormalClients">
          <FieldLayouts>
            <FieldLayout visible="true" field="DEPARTMENT" fieldGuid="14bde487-4aba-4350-a62d-0ab0a79c0cd1" allowEdit="true" columnNumber="1" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Department" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="EMPLOYEE" fieldGuid="8710d56e-7eab-4763-9c31-9fca325394a6" allowEdit="true" columnNumber="2" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Employee" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="LAST_NAME" fieldGuid="ed833883-bf62-4c33-81a6-0a2eceb30e65" allowEdit="true" columnNumber="3" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Last Name" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="FIRST_NAME" fieldGuid="c5561e05-1aa0-4650-b09c-585ffa7f5683" allowEdit="true" columnNumber="4" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="First Name" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DATE_OF_BIRTH" fieldGuid="640b0218-48a8-4a50-bff6-43e21c70bab8" allowEdit="true" columnNumber="5" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Date of Birth" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DOCUMENT_TYPE" fieldGuid="dbc63316-dea1-42f0-99fc-a4a2c0cdad3c" allowEdit="true" columnNumber="6" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Document Type" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="SUBJECT" fieldGuid="0b54b4fd-0407-4b49-88f0-f73f6a9fa468" allowEdit="true" columnNumber="7" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Subject" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="E_MAIL" fieldGuid="ac93439c-5197-4fca-b92a-75fcb8a4fa0d" allowEdit="true" columnNumber="8" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="E-Mail" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="DUE_DATE" fieldGuid="4c51a6c3-6770-4094-9d25-ce122edc9ca5" allowEdit="true" columnNumber="9" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Due Date" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="PERSONNEL_NUMBER" fieldGuid="a18ba834-db24-4358-a2e2-820229dd1692" allowEdit="true" columnNumber="10" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Personnel Number" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS" fieldGuid="90807339-6917-496e-a380-daf8e5a0543c" allowEdit="true" columnNumber="11" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Status" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="NEXT_USER" fieldGuid="e4bf67c8-c8d8-4f57-b279-5038d642d066" allowEdit="true" columnNumber="12" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="Next User" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="SSN_" fieldGuid="4f0c4457-2e77-48d4-9549-557a75bf9a73" allowEdit="true" columnNumber="13" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="SSN#" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
          </FieldLayouts>
        </InfoDialog>
        <ViewerDialog version="5.1.0.1" fID="2" fGuid="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" guid="893f4c25-f412-4161-86b3-96212e4bf6a2" name="Dossier by name" default="false" usage="NormalClients" cachedDocuments="0" prefetchedDocuments="0" prefetchedFiles="0" prefetchedPages="0" mode="AdHokEditMode" zoomFactor="100" markFulltext="true" />
      </ResultList>
    </ResultLists>
  </Dialogs>
  <Misc maxIndexSearchHits="10000">
    <SelectList timeout="15000" />
  </Misc>
  <ThumbnailSettings showAnnotations="true" />
  <FullTextOptions realtimeTextshotGeneration="true" maximumTextshotsPerSection="100" fullTextSupport="true" isCaseSensitive="false" ocrTemplate="523858b5-db42-473c-acec-4977e6b59c0d" maxIndexPageSize="1" fullTextStorageLocationGuid="00000000-0000-0000-0000-000000000000" fullTextProcessGuid="00000000-0000-0000-0000-000000000000" minWordLenght="4" maxHitCountType="Absolute" maxHitCount="10000" transactionalDatabaseTables="false" autoRotate="false" solrConnectionGuid="18db9f86-2d82-4225-a6c9-da18d990f402" solrApplicationName="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" ftVersion="Cheetah">
    <WhiteLists>
      <System.Guid>c7fdbcbd-2901-4da2-ad57-d3f91b601052</System.Guid>
      <System.Guid>7a896714-50c0-4f72-bf51-02fba261991c</System.Guid>
      <System.Guid>491eec8c-b13a-497a-8da1-a15f9523e8cf</System.Guid>
      <System.Guid>b36f7290-14cd-43b0-8b41-d492987a298e</System.Guid>
    </WhiteLists>
  </FullTextOptions>
  <Validation />
  <VersionManagementOptions enable="false" documentHistory="false" />
  <LoggingAgents totalNumber="1">
    <LoggingAgent version="5.1.0.1" default="true" Affinity="ce765ff9-8a22-4d92-b7e4-11b744dcfca4" setid="24" guid="648e1952-230b-4a7d-baae-3715982b7070" name="DWFileCabLog" enabled="true">
      <General loggingLevel="Information" destinationGuid="e1561afc-8240-49b9-86f1-51742c8a8747" administrativeLevel="FileCabinet" />
      <Objects>
        <Object type="Rt_Exceptions" logged="true">
        </Object>
        <Object type="Fc_Adm_General" logged="true">
          <Events>
            <Event type="Change" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_Database" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_Document" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_Disk" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_Field" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_Profile" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_SearchDialog" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_StoreDialog" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_ResultList" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_Link" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_Miscellaneous" logged="true">
          <Events>
            <Event type="Change" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_LoggingAgent" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_LoggingDestination" logged="true">
          <Events>
            <Event type="Create" on="true" />
            <Event type="Change" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Guid" used="true" />
            <Info name="Name" used="true" />
            <Info name="Type" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Rt_Document" logged="true">
          <Events>
            <Event type="Store" on="true" />
            <Event type="Delete" on="true" />
          </Events>
          <Infos>
            <Info name="Name" used="true" />
            <Info name="Organization" used="true" />
            <Info name="UserName" used="true" />
            <Info name="LongUserName" used="true" />
            <Info name="IndexInfo" used="true" />
            <Info name="FileCabinet" used="true" />
            <Info name="DocID" used="true" />
            <Info name="Changes" used="true" />
          </Infos>
        </Object>
        <Object type="Fc_Adm_AutoNumber" logged="false">
          <Events>
            <Event type="Create" on="false" />
            <Event type="Change" on="false" />
            <Event type="Delete" on="false" />
          </Events>
          <Infos>
            <Info name="Guid" used="false" />
            <Info name="Name" used="false" />
            <Info name="Type" used="false" />
            <Info name="Organization" used="false" />
            <Info name="UserName" used="false" />
            <Info name="LongUserName" used="false" />
          </Infos>
        </Object>
      </Objects>
      <Filters />
      <AdditionalDestinations onlyForCriticalErrors="true">
        <EventLog isUsed="false" />
        <EMail isUsed="false" />
      </AdditionalDestinations>
    </LoggingAgent>
  </LoggingAgents>
  <LoggingDestinations totalNumber="1">
    <LoggingDestination version="5.1.0.1" wfType="Undefined" standard="true" setid="25" guid="e1561afc-8240-49b9-86f1-51742c8a8747" name="DWLOG_Peters Engineering_HR">
      <General administrativeLevel="FileCabinet" />
      <Owner userName="d6bf02e3-86a5-4d0a-975c-faf9734dc908" organization="a80557d9-6870-4702-af8a-406e863e8dbd" allowOtherUsers="false" />
      <DBRecord>
        <DBSettings dbConnectionGuid="68cd9611-ff14-4329-863c-27d864f3f76b" table="DWLOG_Peters_Enginee1_HR1" maxRecords="10000" deleteFirstNRecords="1000" unlimitedLogEntries="false" />
      </DBRecord>
    </LoggingDestination>
  </LoggingDestinations>
</FileCabinet>';
			  $finish = $HCabinet.$word.$FCabinet;
//    echo $result["TABLE_NAME"];
		//    echo $countDialog;
			  file_put_contents('cabinet_xml/'.$check.'.xml', $finish);
			  echo $countDialog;
			  echo "reset :";
			  $countDialog = 1 ;
			  echo $countDialog; 
			  $str = $result["COLUMN_NAME"];
// [ String Gerenal XML]

  $HCabinet = '<FileCabinet version="691" organization="Peters Engineering" fid="2" oid="1" oguid="a80557d9-6870-4702-af8a-406e863e8dbd">
  <General>
  </General>
  <DataBase >  
  </DataBase>
  <Documents>
  </Documents>
  <Fields>';

// [ String Field XML] 	// $word	
		  
		  $str = $result["COLUMN_NAME"];
		  
		 if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED" || $result["DATA_TYPE"]=="UNDEFINED" || $result["DATA_TYPE"]=="Text" ){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE" || $result["DATA_TYPE"]=="Date"){
			 $temp  =  '<UserField dwType="Date" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER" || $result["DATA_TYPE"]=="Numeric"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None" scale="0">Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 }
 
		      $word = $temp;
	          $countDialog++;
			  $check = $result["TABLE_NAME"];
			  
		
		  }
	  } 

		 
?>

<?php  } ?>


</table>
<?php  echo "wow";  ?>

