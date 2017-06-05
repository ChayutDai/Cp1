<?php

try{
require_once 'Classes/PHPExcel.php';
include 'Classes/PHPExcel/IOFactory.php';


$inputFileName = "Excel_Cabinet_QA.xlsx"; 
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
<!-- 
<tr>
	<td><?php echo $result["TABLE_NAME"];?></td>
	<td><?php echo $result["COLUMN_NAME"];?></td>
	<td><?php echo $result["DATA_LENGTH"];?></td>
	
</tr>
-->
<?php 

?>

<?php     
      if($count==0){
// hcabinet + genaral + database + Hfields + StringField + Filename + Ffields + HfcProfile + FCPRFILE + FfcProfile + 
// HDialog + shdialog + sDialog + searchDialogfilename + sfdialog +/ sthdialog + stdialog + stfdialog + reshdialog + lvhDialog +lvDialog + lvDialogfilename+ lvfDialog 
// +ifhDialog + infoDialog + ifDialogfilename + iffDialog + resfdialog// +  FDialog		  
// [ H,F Cabinet ]		  

  $HCabinet = '<FileCabinet version="690" organization="Siam Pharmaceutical" fid="15" oid="1" oguid="91b6d7ab-905f-44ad-b475-67f0b4f2424b">';
  $FCabinet = '<Misc maxIndexSearchHits="10000">
    <SelectList timeout="15000" />
  </Misc>
  <ThumbnailSettings showAnnotations="true" />
  <FullTextOptions realtimeTextshotGeneration="true" maximumTextshotsPerSection="100" fullTextSupport="true" isCaseSensitive="false" ocrTemplate="a65fdc0f-a6c4-4adf-9d4b-6651d516c4a0" maxIndexPageSize="1" fullTextStorageLocationGuid="00000000-0000-0000-0000-000000000000" fullTextProcessGuid="00000000-0000-0000-0000-000000000000" minWordLenght="4" maxHitCountType="Absolute" maxHitCount="10000" transactionalDatabaseTables="false" autoRotate="false" solrConnectionGuid="c82d1fc6-e24a-4ebf-a7da-0dadf9988867" solrApplicationName="843654d4-d212-4f60-b388-6cc6ccbb5520" ftVersion="Cheetah">
    <WhiteLists>
      <System.Guid>0a30396e-4300-454e-9242-53aadb5a2e47</System.Guid>
      <System.Guid>08a34899-6133-4347-994a-4fa7407147db</System.Guid>
      <System.Guid>3057e0d8-66d0-4765-b5e4-22a7e4829a1e</System.Guid>
      <System.Guid>e75f9445-024c-4287-824e-fd2d40fdba46</System.Guid>
    </WhiteLists>
  </FullTextOptions>
  <Validation />
  <VersionManagementOptions enable="false" documentHistory="false" />
  <LoggingAgents totalNumber="1">
    <LoggingAgent version="5.1.0.1" default="true" Affinity="843654d4-d212-4f60-b388-6cc6ccbb5520" setid="874" guid="bc9ae0d5-46b6-4d26-a3b2-3018bab42f1d" name="DWFileCabLog" enabled="true">
      <General loggingLevel="Information" destinationGuid="e0c3bcb8-594d-4165-9959-4acb72373a53" administrativeLevel="FileCabinet" />
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
      </Objects>
      <Filters />
      <AdditionalDestinations onlyForCriticalErrors="true">
        <EventLog isUsed="false" />
        <EMail isUsed="false" />
      </AdditionalDestinations>
    </LoggingAgent>
  </LoggingAgents>
  <LoggingDestinations totalNumber="1">
    <LoggingDestination version="5.1.0.1" wfType="Undefined" standard="true" setid="875" guid="e0c3bcb8-594d-4165-9959-4acb72373a53" name="DWLOG_Siam Pharmaceutical_EN04">
      <General administrativeLevel="FileCabinet" />
      <Owner userName="b515e458-a1ea-4918-8669-9a520dc08b03" organization="91b6d7ab-905f-44ad-b475-67f0b4f2424b" allowOtherUsers="false" />
      <DBRecord>
        <DBSettings dbConnectionGuid="4f625158-6c5c-497f-a17c-54dfbf94e71f" table="DWLOG_Siam_Pharmaceu1_'.$result["TABLE_NAME"].'1" maxRecords="10000" deleteFirstNRecords="1000" unlimitedLogEntries="false" />
      </DBRecord>
    </LoggingDestination>
  </LoggingDestinations>
</FileCabinet>';
//echo   $HCabinet;

// [ String Gerenal XML]
  
	$general = '<General autoDisplay="false" foreignChkSum="false">
    <FCID guid="843654d4-d212-4f60-b388-6cc6ccbb5520" dbDateTime="13116406.796" />
    <FCName>'.$result["TABLE_NAME"].'</FCName>
    <FCShortName>'.$result["TABLE_NAME"].'</FCShortName>
    <FCSymbol symbol="standart" color="Red" />
    <Description>Imported documents from '.$result["TABLE_NAME"].' of ECM Systems</Description>
    <Tracking>false</Tracking>
    <SecurityLevel>Normal</SecurityLevel>
    <SAPAccess>false</SAPAccess>
    <CASSupport>false</CASSupport>
    <SAPMapping totalNumber="0" />
    <NotesAccess>false</NotesAccess>
    <MasterFCGuid>00000000-0000-0000-0000-000000000000</MasterFCGuid>
    <AllowEMailAlerts>true</AllowEMailAlerts>
    <AllowWExplorerClientAccess>false</AllowWExplorerClientAccess>
    <AllowTrustedAppUserAccess>false</AllowTrustedAppUserAccess>
    <ReplicationEnabled>false</ReplicationEnabled>
    </General>';

// [ String Database XML]
   
	$database = '<DataBase databaseConnectionGuid="de47287d-a9ae-4a6c-8dc9-46b9deb8c42b" databaseType="MySQL">
    <DBGeneral allowModifyIndexEntries="true" isReadOnly="false" timeoutSearch="1" upperCaseIndexEntries="false" />
    <Table type="MainTable">'.$result["TABLE_NAME"].'</Table>
    <Table type="SystemTable">DWSYS</Table>
    <Table type="DisksTable">'.$result["TABLE_NAME"].'_DSKS</Table>
    <Table type="LockTable">'.$result["TABLE_NAME"].'_LOCK</Table>
    <Table type="VersionTable">'.$result["TABLE_NAME"].'_VER</Table>
    <Table type="SectionTable">'.$result["TABLE_NAME"].'_SECT</Table>
    <Table type="PageTable">'.$result["TABLE_NAME"].'_PAGE</Table>
  </DataBase>'.'<Documents>
    <CapacityLimit limitDiskCapacity="false" includeDB="No" includeFullText="false" documentsLimit="-1">0</CapacityLimit>
    <DocGeneral autoCreateDisk="false" autoSwitchtoNextDisk="false" newDisksType="RW" updateHeadersOfChangedDocuments="true" />
    <Disk diskVersion="DW5" creationDate="2016-08-25T08:08:17.8589708Z" number="1" dw4disk="false" refreshOnActivate="true" updateHeadersOfChangedDocuments="true">
      <CapacityLimit limitDiskCapacity="false" includeDB="No" includeFullText="false" documentsLimit="-1">0</CapacityLimit>
      <Type>RW</Type>
      <CurrentDiskSpace>0</CurrentDiskSpace>
      <StorageLocationGuid>b770955b-92fc-4b7d-ab2b-5ca19d792a6c</StorageLocationGuid>
    </Disk>
    <StorageLocationGuid>b770955b-92fc-4b7d-ab2b-5ca19d792a6c</StorageLocationGuid>
  </Documents>';

// [ H,F Fields]

  $headField = '<Fields>';
  $footField = '<SystemField dwType="Int" dwLength="-1" dbName="DWVERID" displayName="Version ID" guid="6ba8711f-1e61-4457-a1ca-f0f676cc5d58">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWSYSVERSION" displayName="Version" guid="c16324d5-b7ec-4c07-808a-9d3c55395fd4">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWFLAGSEX" displayName="Extended Flags" guid="ff027346-c0a5-4785-9eb3-0ac5168d31d7">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="-1" dbName="DWSTORAGEACCESS" displayName="Storage Access" guid="b76a2e81-547f-452a-b4fb-34935c2f4e8e">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWEXTENSION" displayName="Extension" guid="944b0204-1167-45c3-88e4-758eaaf7c16f">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWHEADERSIZE" displayName="Header Size" guid="f7188b2d-852c-4173-a2ac-f4905f37488e">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWDOCSIZE" displayName="Document Size" guid="386b62ec-a4cb-4784-bc35-5b2325f1edd8">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWOFFSET" displayName="Offset" guid="7538c302-fc69-4aca-abcb-d581de497d09">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWFLAGS" displayName="Flags" guid="a0a7d3f4-aa35-4248-8555-cba854785e6f">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="-1" dbName="DWINTELLIXHINTS" displayName="Intellix hints" guid="f63b9f8c-06e9-45d2-b1da-54eed78e2874">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWCONTENTETAG" displayName="DWCONTENTETAG" guid="48341331-c6fd-4202-9799-2d2c821f37a2">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWANNOETAG" displayName="DWANNOETAG" guid="90ce3c84-0751-4c58-8666-332438be00b3">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWDOCID" displayName="Doc ID" guid="2b6ca97e-3448-4f16-8d94-6a2f1d932f9d">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWPAGECOUNT" displayName="File Count" guid="d6b9adb6-2647-4d71-a3a4-ab05c586463d">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWDISKNO" displayName="Disk Number" guid="b425c0c7-e64f-40f8-aae7-d6eff20fcbcc">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWSTOREDATETIME" displayName="Store Date" guid="e2393299-a451-400b-874b-f38c957ed8e9">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWSTOREUSER" displayName="Store User" guid="2a920bf5-2925-4666-aefd-6f322e4df911">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWMODDATETIME" displayName="Modification Date" guid="bd4afca8-0149-43af-b595-b2e09b890359">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWMODUSER" displayName="Modification User" guid="9529c16b-8c5e-4d09-bf1f-c7587b8ad9e2">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWLASTACCESSDATETIME" displayName="Last Access Date" guid="7100d7b2-1d1c-467e-8e63-292b0fdffddc">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWLASTACCESSUSER" displayName="Last Access User" guid="35b03173-0895-4d40-9bd3-73d59a3cebb1">
    </SystemField>
    <FullTextField dwType="TextVar" dwLength="-1" dbName="DocuWareFulltext" displayName="Fulltext" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="949f2f08-644e-4f6d-b894-212436452e17">
      <DBType indexed="false" length="0" uniqueType="None">String</DBType>
      <FixedEntry>No</FixedEntry>
    </FullTextField></Fields>';	  

// [ String Field XML] 	// $word	
		  
		  $str = $result["COLUMN_NAME"];
		  
		 if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED" || $result["DATA_TYPE"]=="UNDEFINED"  ){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE"){
			 $temp  =  '<UserField dwType="Date" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None" scale="0">Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 }

// [ H,F FCprofile ]

	$HfcProfile = '<FCProfiles>';
	$FfcProfile = '</FCProfiles>';

// [ H,F Dialog ]

	$HDialog = '<Dialogs>';
	$FDialog = '</Dialogs>';

// [ H,F sDialog ]

	$shdialog = '   <SearchDialogs>
      <SearchDialog setID="876" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="689f4669-c979-4c2a-adde-506468a273b1" name="Standard Search Dialog" default="true" usage="NormalClients" version="5.1.0.1">
        <Properties resultListGuid="58d17599-3fae-4228-805a-c6aa890e18f2" />
        <DialogFields>';
	$sfdialog = ' </DialogFields>
      </SearchDialog>
    </SearchDialogs>';

// [ H,F stDialog ]

	$sthdialog = '<StoreDialogs>
      <StoreDialog setID="877" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="c7aaedf9-7a12-4042-aded-3ffd6ecec488" name="Standard Store Dialog" default="true" usage="NormalClients" version="5.1.0.1">
        <DialogFields>';
	$stfdialog = '</DialogFields>
      </StoreDialog>
    </StoreDialogs>';

// [ H,F resDialog ]

	$reshdialog = '<ResultLists>
      <ResultList setID="878" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="58d17599-3fae-4228-805a-c6aa890e18f2" name="Standard List View Result Dialog" default="true" usage="NormalClients" version="5.1.0.1">
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
        ';
	$resfdialog = ' <ViewerDialog version="5.1.0.1" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="58d17599-3fae-4228-805a-c6aa890e18f2" name="Standard List View Result Dialog" default="true" usage="NormalClients" cachedDocuments="0" prefetchedDocuments="0" prefetchedFiles="0" prefetchedPages="0" mode="AdHokEditMode" zoomFactor="100" markFulltext="true" />
      </ResultList>
    </ResultLists>
  </Dialogs>';

// [ H,F lvDialog ]

	$lvhDialog = '<ListView>
          <General displayFirstDocumentImmediately="false">
            <SortOrder>
              <Field fieldGuid="80b23501-6cbb-4dfc-af9c-8030e7a6d0d0" fieldID="-2147483648" field="Store Date" ascending="false" />
            </SortOrder>
          </General>
          <FieldLayouts>';
	$lvfDialog = '</FieldLayouts>
        </ListView>';
	

// [ H,F infoDialog ]

	$ifhDialog = '<InfoDialog version="5.1.0.1" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="58d17599-3fae-4228-805a-c6aa890e18f2" name="Standard List View Result Dialog" default="true" usage="NormalClients">
          <FieldLayouts>';
	$iffDialog = '</FieldLayouts>
        </InfoDialog>';	  

// [ String Dialog XML]

	$searchDialog = '<SearchDialogField name="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" visible="true" orderNumber="'.$countDialog.'" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>';
	$storeDialog = '<StoreDialogField name="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" visible="true" orderNumber="'.$countDialog.'" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>';
	$lvDialog = '<FieldLayout visible="true" field="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" fieldGuid="39f2710a-da41-4063-bbf5-06ae8594f407" columnNumber="'.$countDialog.'">
              <Label letters="standard" label="'.$result["COLUMN_NAME"].'" />
              <FieldCell textWrap="false" />
            </FieldLayout>';
	$infoDialog = '<FieldLayout visible="true" field="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" fieldGuid="e053017e-21ba-479d-9503-4556a62e35ad" allowEdit="true" columnNumber="'.$countDialog.'" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="'.$result["COLUMN_NAME"].'" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>';
	

		  $word = $temp;
		  $wordFcProfile = ','.$result["COLUMN_NAME"];
		  $sDialog = $sDialog.$searchDialog ;
		  $stDialog = $stDialog.$storeDialog;
		  $listDialog = $listDialog.$lvDialog; 
		  $ifDialog = $ifDialog.$infoDialog;
		  
		  $count++;
		  $countDialog++;
		  $check = $result["TABLE_NAME"];
		  
	  }else{
		  
		  if ( $check == $result["TABLE_NAME"]){
// [ String Field XML]
			  
		       $str = $result["COLUMN_NAME"];
			  if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED"){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE"){
			 $temp  =  '<UserField dwType="Date" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None" scale="0" >Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 } 
	
// [ String Dialog XML]

	$searchDialog = '<SearchDialogField name="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" visible="true" orderNumber="'.$countDialog.'" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>';
	$storeDialog = '<StoreDialogField name="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" visible="true" orderNumber="'.$countDialog.'" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>';
	$lvDialog = '<FieldLayout visible="true" field="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" fieldGuid="39f2710a-da41-4063-bbf5-06ae8594f407" columnNumber="'.$countDialog.'">
              <Label letters="standard" label="'.$result["COLUMN_NAME"].'" />
              <FieldCell textWrap="false" />
            </FieldLayout>';
	$infoDialog = '<FieldLayout visible="true" field="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" fieldGuid="e053017e-21ba-479d-9503-4556a62e35ad" allowEdit="true" columnNumber="'.$countDialog.'" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="'.$result["COLUMN_NAME"].'" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>';

	
			  $word = $word.$temp ;
			  $wordFcProfile = ','.$result["COLUMN_NAME"];
			  $sDialog = $sDialog.$searchDialog ;
			  $stDialog = $stDialog.$storeDialog;
			  $listDialog= $listDialog.$lvDialog; 
			  $ifDialog = $ifDialog.$infoDialog;
			  
			  $countDialog++;
		  }else{ 
			  
		  
$wordFcProfile = $wordFcProfile.',';	
// [ String FCprofile ]

	$FCPRFILE = '
	<FCProfile version="5.1.0.1" fpid="1734" fid="15" guid="0c15b0a9-30eb-4fc7-a09d-f3ca11b6ed6c" name="Admin" type="Administrative" useIndexFilter="false" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520">
      <GeneralRights>Admin_ModifyRight, Admin_Operator, Admin_EditDialogs, Admin_MigrationAdministration, General_AppendToReadOnly, General_ChangeToReadOnly</GeneralRights>
      <AnnotationRights>0</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>,</Fields>
        </FieldRight>
      </FieldRights>
    </FCProfile>
	<FCProfile version="5.1.0.1" fpid="1737" fid="15" guid="c0dfe3b2-520f-4ba0-a3fb-d60367f9939f" name="Delete" type="Delete" useIndexFilter="false" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520">
      <GeneralRights>General_DeleteDocuments</GeneralRights>
      <AnnotationRights>0</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>,</Fields>
        </FieldRight>
      </FieldRights>
    </FCProfile> 
	<FCProfile version="5.1.0.1" fpid="1736" fid="15" guid="e2224b4a-5672-450b-857b-9664081163fa" name="Edit" type="Edit" useIndexFilter="false" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520">
      <GeneralRights>General_Store, General_Append, General_Edit, General_EditDocuments, General_Checkout</GeneralRights>
      <AnnotationRights>Annotation_New, Annotation_Delete, Annotation_All, Annotation_Hide, Annotation_Stamp_New, Annotation_Stamp_Hide</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
      </FieldRights>
    </FCProfile>
	<FCProfile version="5.1.0.1" fpid="1733" fid="15" guid="83539ac5-a1c6-43db-9e03-61183ff08bc0" name="Owner" type="Custom" useIndexFilter="false" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520">
      <GeneralRights>Admin_Owner, Admin_ModifyRight, Admin_Operator, Admin_EditDialogs, Admin_MigrationAdministration, General_Store, General_Append, General_Search, General_Edit, General_DisplayDocument, General_EditDocuments, General_DeleteDocuments, General_Export, General_AppendToReadOnly, General_ChangeToReadOnly, General_Checkout</GeneralRights>
      <AnnotationRights>Annotation_New, Annotation_Delete, Annotation_All, Annotation_Hide, Annotation_Stamp_New, Annotation_Stamp_Hide</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
      </FieldRights>
      <AssignedUsers>
        <User uID="1" uGuid="a10f3281-6ed4-48fe-81a2-890e9f88f638" name="Admin" organizationGuid="00000000-0000-0000-0000-000000000000" />
        <User uID="1573" uGuid="b515e458-a1ea-4918-8669-9a520dc08b03" name="sirichai" organizationGuid="00000000-0000-0000-0000-000000000000" />
      </AssignedUsers>
    </FCProfile>
	<FCProfile version="5.1.0.1" fpid="1735" fid="15" guid="83f116e8-e59e-4da8-a83a-3954108dce28" name="Read" type="Read" useIndexFilter="false" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520">
      <GeneralRights>General_Search, General_DisplayDocument, General_Export</GeneralRights>
      <AnnotationRights>0</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
          <Fields>,</Fields>
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>'.$wordFcProfile.'</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>,</Fields>
        </FieldRight>
      </FieldRights>
    </FCProfile>
	';
	
// hcabinet + genaral + database + Hfields + StringField + Filename + Ffields + HfcProfile + FCPRFILE + FfcProfile + 
// HDialog + shdialog + sDialog + searchDialogfilename + sfdialog +/ sthdialog + stdialog + stfdialog + reshdialog + lvhDialog +lvDialog + lvDialogfilename+ lvfDialog 
// +ifhDialog + infoDialog + ifDialogfilename + iffDialog + resfdialog// +  FDialog			
			  $finish = $HCabinet.$general.$database.$headField.$word.$footField.$HfcProfile.$FCPRFILE.$FfcProfile.$HDialog.$shdialog.$sDialog.$sfdialog.$sthdialog.$stDialog.$stfdialog.$reshdialog.$lvhDialog.$listDialog.$lvfDialog.$ifhDialog.$ifDialog.$iffDialog.$resfdialog.$FCabinet;
		//    echo $result["TABLE_NAME"];
		//    echo $countDialog;
			  file_put_contents('cabinet_xml/'.$check.'.xml', $finish);
			  echo $countDialog;
			  echo "reset :";
			  $countDialog = 1 ;
			  echo $countDialog; 
			  $str = $result["COLUMN_NAME"];
// [ String Gerenal XML]

  $HCabinet = '<FileCabinet version="690" organization="Siam Pharmaceutical" fid="15" oid="1" oguid="91b6d7ab-905f-44ad-b475-67f0b4f2424b">';
  $FCabinet = '<Misc maxIndexSearchHits="10000">
    <SelectList timeout="15000" />
  </Misc>
  <ThumbnailSettings showAnnotations="true" />
  <FullTextOptions realtimeTextshotGeneration="true" maximumTextshotsPerSection="100" fullTextSupport="true" isCaseSensitive="false" ocrTemplate="a65fdc0f-a6c4-4adf-9d4b-6651d516c4a0" maxIndexPageSize="1" fullTextStorageLocationGuid="00000000-0000-0000-0000-000000000000" fullTextProcessGuid="00000000-0000-0000-0000-000000000000" minWordLenght="4" maxHitCountType="Absolute" maxHitCount="10000" transactionalDatabaseTables="false" autoRotate="false" solrConnectionGuid="c82d1fc6-e24a-4ebf-a7da-0dadf9988867" solrApplicationName="843654d4-d212-4f60-b388-6cc6ccbb5520" ftVersion="Cheetah">
    <WhiteLists>
      <System.Guid>0a30396e-4300-454e-9242-53aadb5a2e47</System.Guid>
      <System.Guid>08a34899-6133-4347-994a-4fa7407147db</System.Guid>
      <System.Guid>3057e0d8-66d0-4765-b5e4-22a7e4829a1e</System.Guid>
      <System.Guid>e75f9445-024c-4287-824e-fd2d40fdba46</System.Guid>
    </WhiteLists>
  </FullTextOptions>
  <Validation />
  <VersionManagementOptions enable="false" documentHistory="false" />
  <LoggingAgents totalNumber="1">
    <LoggingAgent version="5.1.0.1" default="true" Affinity="843654d4-d212-4f60-b388-6cc6ccbb5520" setid="874" guid="bc9ae0d5-46b6-4d26-a3b2-3018bab42f1d" name="DWFileCabLog" enabled="true">
      <General loggingLevel="Information" destinationGuid="e0c3bcb8-594d-4165-9959-4acb72373a53" administrativeLevel="FileCabinet" />
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
      </Objects>
      <Filters />
      <AdditionalDestinations onlyForCriticalErrors="true">
        <EventLog isUsed="false" />
        <EMail isUsed="false" />
      </AdditionalDestinations>
    </LoggingAgent>
  </LoggingAgents>
  <LoggingDestinations totalNumber="1">
    <LoggingDestination version="5.1.0.1" wfType="Undefined" standard="true" setid="875" guid="e0c3bcb8-594d-4165-9959-4acb72373a53" name="DWLOG_Siam Pharmaceutical_EN04">
      <General administrativeLevel="FileCabinet" />
      <Owner userName="b515e458-a1ea-4918-8669-9a520dc08b03" organization="91b6d7ab-905f-44ad-b475-67f0b4f2424b" allowOtherUsers="false" />
      <DBRecord>
        <DBSettings dbConnectionGuid="4f625158-6c5c-497f-a17c-54dfbf94e71f" table="DWLOG_Siam_Pharmaceu1_'.$result["TABLE_NAME"].'1" maxRecords="10000" deleteFirstNRecords="1000" unlimitedLogEntries="false" />
      </DBRecord>
    </LoggingDestination>
  </LoggingDestinations>
</FileCabinet>';
//echo   $HCabinet;

// [ String Gerenal XML]
  
	$general = '<General autoDisplay="false" foreignChkSum="false">
    <FCID guid="843654d4-d212-4f60-b388-6cc6ccbb5520" dbDateTime="13116406.796" />
    <FCName>'.$result["TABLE_NAME"].'</FCName>
    <FCShortName>'.$result["TABLE_NAME"].'</FCShortName>
    <FCSymbol symbol="standart" color="Red" />
    <Description>Imported documents from '.$result["TABLE_NAME"].' of ECM Systems</Description>
    <Tracking>false</Tracking>
    <SecurityLevel>Normal</SecurityLevel>
    <SAPAccess>false</SAPAccess>
    <CASSupport>false</CASSupport>
    <SAPMapping totalNumber="0" />
    <NotesAccess>false</NotesAccess>
    <MasterFCGuid>00000000-0000-0000-0000-000000000000</MasterFCGuid>
    <AllowEMailAlerts>true</AllowEMailAlerts>
    <AllowWExplorerClientAccess>false</AllowWExplorerClientAccess>
    <AllowTrustedAppUserAccess>false</AllowTrustedAppUserAccess>
    <ReplicationEnabled>false</ReplicationEnabled>
    </General>';

// [ String Database XML]
   
	$database = '<DataBase databaseConnectionGuid="de47287d-a9ae-4a6c-8dc9-46b9deb8c42b" databaseType="MySQL">
    <DBGeneral allowModifyIndexEntries="true" isReadOnly="false" timeoutSearch="1" upperCaseIndexEntries="false" />
    <Table type="MainTable">'.$result["TABLE_NAME"].'</Table>
    <Table type="SystemTable">DWSYS</Table>
    <Table type="DisksTable">'.$result["TABLE_NAME"].'_DSKS</Table>
    <Table type="LockTable">'.$result["TABLE_NAME"].'_LOCK</Table>
    <Table type="VersionTable">'.$result["TABLE_NAME"].'_VER</Table>
    <Table type="SectionTable">'.$result["TABLE_NAME"].'_SECT</Table>
    <Table type="PageTable">'.$result["TABLE_NAME"].'_PAGE</Table>
  </DataBase>'.'<Documents>
    <CapacityLimit limitDiskCapacity="false" includeDB="No" includeFullText="false" documentsLimit="-1">0</CapacityLimit>
    <DocGeneral autoCreateDisk="false" autoSwitchtoNextDisk="false" newDisksType="RW" updateHeadersOfChangedDocuments="true" />
    <Disk diskVersion="DW5" creationDate="2016-08-25T08:08:17.8589708Z" number="1" dw4disk="false" refreshOnActivate="true" updateHeadersOfChangedDocuments="true">
      <CapacityLimit limitDiskCapacity="false" includeDB="No" includeFullText="false" documentsLimit="-1">0</CapacityLimit>
      <Type>RW</Type>
      <CurrentDiskSpace>0</CurrentDiskSpace>
      <StorageLocationGuid>b770955b-92fc-4b7d-ab2b-5ca19d792a6c</StorageLocationGuid>
    </Disk>
    <StorageLocationGuid>b770955b-92fc-4b7d-ab2b-5ca19d792a6c</StorageLocationGuid>
  </Documents>';

// [ H,F Fields]

  $headField = '<Fields>';
  $footField = '<SystemField dwType="Int" dwLength="-1" dbName="DWVERID" displayName="Version ID" guid="6ba8711f-1e61-4457-a1ca-f0f676cc5d58">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWSYSVERSION" displayName="Version" guid="c16324d5-b7ec-4c07-808a-9d3c55395fd4">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWFLAGSEX" displayName="Extended Flags" guid="ff027346-c0a5-4785-9eb3-0ac5168d31d7">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="-1" dbName="DWSTORAGEACCESS" displayName="Storage Access" guid="b76a2e81-547f-452a-b4fb-34935c2f4e8e">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWEXTENSION" displayName="Extension" guid="944b0204-1167-45c3-88e4-758eaaf7c16f">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWHEADERSIZE" displayName="Header Size" guid="f7188b2d-852c-4173-a2ac-f4905f37488e">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWDOCSIZE" displayName="Document Size" guid="386b62ec-a4cb-4784-bc35-5b2325f1edd8">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWOFFSET" displayName="Offset" guid="7538c302-fc69-4aca-abcb-d581de497d09">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWFLAGS" displayName="Flags" guid="a0a7d3f4-aa35-4248-8555-cba854785e6f">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="-1" dbName="DWINTELLIXHINTS" displayName="Intellix hints" guid="f63b9f8c-06e9-45d2-b1da-54eed78e2874">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWCONTENTETAG" displayName="DWCONTENTETAG" guid="48341331-c6fd-4202-9799-2d2c821f37a2">
    </SystemField>
    <SystemField dwType="Long" dwLength="-1" dbName="DWANNOETAG" displayName="DWANNOETAG" guid="90ce3c84-0751-4c58-8666-332438be00b3">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWDOCID" displayName="Doc ID" guid="2b6ca97e-3448-4f16-8d94-6a2f1d932f9d">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWPAGECOUNT" displayName="File Count" guid="d6b9adb6-2647-4d71-a3a4-ab05c586463d">
    </SystemField>
    <SystemField dwType="Int" dwLength="-1" dbName="DWDISKNO" displayName="Disk Number" guid="b425c0c7-e64f-40f8-aae7-d6eff20fcbcc">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWSTOREDATETIME" displayName="Store Date" guid="e2393299-a451-400b-874b-f38c957ed8e9">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWSTOREUSER" displayName="Store User" guid="2a920bf5-2925-4666-aefd-6f322e4df911">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWMODDATETIME" displayName="Modification Date" guid="bd4afca8-0149-43af-b595-b2e09b890359">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWMODUSER" displayName="Modification User" guid="9529c16b-8c5e-4d09-bf1f-c7587b8ad9e2">
    </SystemField>
    <SystemField dwType="DateTime" dwLength="-1" dbName="DWLASTACCESSDATETIME" displayName="Last Access Date" guid="7100d7b2-1d1c-467e-8e63-292b0fdffddc">
    </SystemField>
    <SystemField dwType="TextVar" dwLength="20" dbName="DWLASTACCESSUSER" displayName="Last Access User" guid="35b03173-0895-4d40-9bd3-73d59a3cebb1">
    </SystemField>
    <FullTextField dwType="TextVar" dwLength="-1" dbName="DocuWareFulltext" displayName="Fulltext" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="949f2f08-644e-4f6d-b894-212436452e17">
      <DBType indexed="false" length="0" uniqueType="None">String</DBType>
      <FixedEntry>No</FixedEntry>
    </FullTextField></Fields>';	  

// [ String Field XML] 	// $word	
		  
		  $str = $result["COLUMN_NAME"];
		  
		 if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED"){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE"){
			 $temp  =  '<UserField dwType="Date" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="-1" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="-1" uniqueType="None" scale="0" >Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 }

// [ H,F FCprofile ]

	$HfcProfile = '<FCProfiles>';
	$FfcProfile = '</FCProfiles>';

// [ H,F Dialog ]

	$HDialog = '<Dialogs>';
	$FDialog = '</Dialogs>';

// [ H,F sDialog ]

	$shdialog = '   <SearchDialogs>
      <SearchDialog setID="876" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="689f4669-c979-4c2a-adde-506468a273b1" name="Standard Search Dialog" default="true" usage="NormalClients" version="5.1.0.1">
        <Properties resultListGuid="58d17599-3fae-4228-805a-c6aa890e18f2" />
        <DialogFields>';
	$sfdialog = ' </DialogFields>
      </SearchDialog>
    </SearchDialogs>';

// [ H,F stDialog ]

	$sthdialog = '<StoreDialogs>
      <StoreDialog setID="877" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="c7aaedf9-7a12-4042-aded-3ffd6ecec488" name="Standard Store Dialog" default="true" usage="NormalClients" version="5.1.0.1">
        <DialogFields>';
	$stfdialog = '</DialogFields>
      </StoreDialog>
    </StoreDialogs>';

// [ H,F resDialog ]

	$reshdialog = '<ResultLists>
      <ResultList setID="878" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="58d17599-3fae-4228-805a-c6aa890e18f2" name="Standard List View Result Dialog" default="true" usage="NormalClients" version="5.1.0.1">
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
        ';
	$resfdialog = ' <ViewerDialog version="5.1.0.1" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="58d17599-3fae-4228-805a-c6aa890e18f2" name="Standard List View Result Dialog" default="true" usage="NormalClients" cachedDocuments="0" prefetchedDocuments="0" prefetchedFiles="0" prefetchedPages="0" mode="AdHokEditMode" zoomFactor="100" markFulltext="true" />
      </ResultList>
    </ResultLists>
  </Dialogs>';

// [ H,F lvDialog ]

	$lvhDialog = '<ListView>
          <General displayFirstDocumentImmediately="false">
            <SortOrder>
              <Field fieldGuid="80b23501-6cbb-4dfc-af9c-8030e7a6d0d0" fieldID="-2147483648" field="Store Date" ascending="false" />
            </SortOrder>
          </General>
          <FieldLayouts>';
	$lvfDialog = '</FieldLayouts>
        </ListView>';
	

// [ H,F infoDialog ]

	$ifhDialog = '<InfoDialog version="5.1.0.1" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="58d17599-3fae-4228-805a-c6aa890e18f2" name="Standard List View Result Dialog" default="true" usage="NormalClients">
          <FieldLayouts>';
	$iffDialog = '</FieldLayouts>
        </InfoDialog>';	  

// [ String Dialog XML]

	$searchDialog = '<SearchDialogField name="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" visible="true" orderNumber="'.$countDialog.'" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>';
	$storeDialog = '<StoreDialogField name="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" visible="true" orderNumber="'.$countDialog.'" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>';
	$lvDialog = '<FieldLayout visible="true" field="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" fieldGuid="39f2710a-da41-4063-bbf5-06ae8594f407" columnNumber="'.$countDialog.'">
              <Label letters="standard" label="'.$result["COLUMN_NAME"].'" />
              <FieldCell textWrap="false" />
            </FieldLayout>';
	$infoDialog = '<FieldLayout visible="true" field="'.$result["COLUMN_NAME"].'" displayName="'.$result["COLUMN_NAME"].'" fieldGuid="e053017e-21ba-479d-9503-4556a62e35ad" allowEdit="true" columnNumber="'.$countDialog.'" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="'.$result["COLUMN_NAME"].'" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>';	 
		      $word = $temp;
		      $wordFcProfile = ','.$result["COLUMN_NAME"];
			  $sDialog = $searchDialog ;
			  $stDialog = $storeDialog;
			  $listDialog= $lvDialog; 
			  $ifDialog = $infoDialog;
	          $countDialog++;
			  $check = $result["TABLE_NAME"];
			  
		
		  }
	  } 

		 
?>

<?php  } ?>


</table>
<?php  echo "wow";  ?>

