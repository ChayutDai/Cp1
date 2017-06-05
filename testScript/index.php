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

<?php $stringnaja = "None"; $stringnajaja = "None2"; $count=0; $word=""; $check=""; $temp = "";?>
<?php  foreach ($namedDataArray as $result) {  ?>
<!-- 
<tr>
	<td><?php echo $result["TABLE_NAME"];?></td>
	<td><?php echo $result["COLUMN_NAME"];?></td>
	<td><?php echo $result["DATA_LENGTH"];?></td>
	
</tr>
-->
<?php 

  $start = '<FileCabinet version="690" organization="Siam Pharmaceutical" fid="15" oid="1" oguid="91b6d7ab-905f-44ad-b475-67f0b4f2424b">
  <General autoDisplay="false" foreignChkSum="false">
    <FCID guid="843654d4-d212-4f60-b388-6cc6ccbb5520" dbDateTime="13116406.796" />
    <FCName>EN04</FCName>
    <FCShortName>EN04</FCShortName>
    <FCSymbol symbol="standart" color="Red" />
    <Description>Imported documents from EN04 of ECM Systems</Description>
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
  </General>
  <DataBase databaseConnectionGuid="de47287d-a9ae-4a6c-8dc9-46b9deb8c42b" databaseType="MySQL">
    <DBGeneral allowModifyIndexEntries="true" isReadOnly="false" timeoutSearch="1" upperCaseIndexEntries="false" />
    <Table type="MainTable">EN04</Table>
    <Table type="SystemTable">DWSYS</Table>
    <Table type="DisksTable">EN04_DSKS</Table>
    <Table type="LockTable">EN04_LOCK</Table>
    <Table type="VersionTable">EN04_VER</Table>
    <Table type="SectionTable">EN04_SECT</Table>
    <Table type="PageTable">EN04_PAGE</Table>
  </DataBase>
  <Documents>
    <CapacityLimit limitDiskCapacity="false" includeDB="No" includeFullText="false" documentsLimit="-1">0</CapacityLimit>
    <DocGeneral autoCreateDisk="false" autoSwitchtoNextDisk="false" newDisksType="RW" updateHeadersOfChangedDocuments="true" />
    <Disk diskVersion="DW5" creationDate="2016-08-23T06:24:21.6674353Z" number="1" dw4disk="false" refreshOnActivate="true" updateHeadersOfChangedDocuments="true">
      <CapacityLimit limitDiskCapacity="false" includeDB="No" includeFullText="false" documentsLimit="-1">0</CapacityLimit>
      <Type>RW</Type>
      <CurrentDiskSpace>0</CurrentDiskSpace>
      <StorageLocationGuid>b770955b-92fc-4b7d-ab2b-5ca19d792a6c</StorageLocationGuid>
    </Disk>
    <StorageLocationGuid>b770955b-92fc-4b7d-ab2b-5ca19d792a6c</StorageLocationGuid>
  </Documents>
  <Fields>';
  
  $end = '</Fields>
  <FCProfiles>
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
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
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
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
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
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
      </FieldRights>
    </FCProfile>
    <FCProfile version="5.1.0.1" fpid="1733" fid="15" guid="83539ac5-a1c6-43db-9e03-61183ff08bc0" name="Owner" type="Custom" useIndexFilter="false" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520">
      <GeneralRights>Admin_Owner, Admin_ModifyRight, Admin_Operator, Admin_EditDialogs, Admin_MigrationAdministration, General_Store, General_Append, General_Search, General_Edit, General_DisplayDocument, General_EditDocuments, General_DeleteDocuments, General_Export, General_AppendToReadOnly, General_ChangeToReadOnly, General_Checkout</GeneralRights>
      <AnnotationRights>Annotation_New, Annotation_Delete, Annotation_All, Annotation_Hide, Annotation_Stamp_New, Annotation_Stamp_Hide</AnnotationRights>
      <FieldRights>
        <FieldRight right="Field_Modify">
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
        <FieldRight right="Field_NoNewEntry">
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
        <FieldRight right="Field_NotEmpty">
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
        <FieldRight right="Field_Read">
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
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
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
        <FieldRight right="Field_Search">
          <Fields>,REGNO,BARCODE,STATUS_DOC,STATUS_REGDELSCAN,STATUS_SUB_DOC,COMPANY_NAME,EQUIPMENT_NO,ASSET_NO,MAINTEN_ORDER,YEAR_REGIS,MONTH_INT,CONTRACT_NO,FILE_NAME,</Fields>
        </FieldRight>
        <FieldRight right="Field_Write">
          <Fields>,</Fields>
        </FieldRight>
      </FieldRights>
    </FCProfile>
  </FCProfiles>
  <Dialogs>
    <SearchDialogs>
      <SearchDialog setID="876" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="689f4669-c979-4c2a-adde-506468a273b1" name="Standard Search Dialog" default="true" usage="NormalClients" version="5.1.0.1">
        <Properties resultListGuid="58d17599-3fae-4228-805a-c6aa890e18f2" />
        <DialogFields>
          <SearchDialogField name="REGNO" displayName="REGNO" visible="true" orderNumber="1" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="BARCODE" displayName="BARCODE" visible="true" orderNumber="2" guid="5a02e01e-a88f-4090-9b26-cdcab1aa1c11" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="STATUS_DOC" displayName="STATUS_DOC" visible="true" orderNumber="3" guid="32780687-c5f5-47d7-b0f9-f42c43eebf0b" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="STATUS_REGDELSCAN" displayName="STATUS_REGDELSCAN" visible="true" orderNumber="4" guid="481e71b5-39f1-4940-b2ca-d947f052037f" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="STATUS_SUB_DOC" displayName="STATUS_SUB_DOC" visible="true" orderNumber="5" guid="c4b51e0d-6924-4a55-8687-7054b85c89ab" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="COMPANY_NAME" displayName="COMPANY_NAME" visible="true" orderNumber="6" guid="785d1e1a-c4f2-496b-af20-6fa59a841f5e" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="EQUIPMENT_NO" displayName="EQUIPMENT_NO" visible="true" orderNumber="7" guid="82cba8fc-5f75-48dc-be4c-52d8fd51d1ad" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="ASSET_NO" displayName="ASSET_NO" visible="true" orderNumber="8" guid="309699aa-187f-41dc-92ce-5bc7ce92355c" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="MAINTEN_ORDER" displayName="MAINTEN_ORDER" visible="true" orderNumber="9" guid="fcd4ec87-7224-4f05-b176-5beb45a00822" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="YEAR_REGIS" displayName="YEAR_REGIS" visible="true" orderNumber="10" guid="b1ab62a1-97e0-449b-a94d-7d5598399341" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="MONTH_INT" displayName="MONTH_INT" visible="true" orderNumber="11" guid="0b4478a4-84a2-41a6-ada8-d414f9548863" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="CONTRACT_NO" displayName="CONTRACT_NO" visible="true" orderNumber="12" guid="39f2710a-da41-4063-bbf5-06ae8594f407" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="DocuWareFulltext" displayName="Fulltext" visible="true" orderNumber="13" guid="75c3cca7-8bcc-4b49-b92f-33c908284c3f" allowFiltering="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </SearchDialogField>
          <SearchDialogField name="FILE_NAME" displayName="FILE_NAME" visible="true" orderNumber="14" guid="e053017e-21ba-479d-9503-4556a62e35ad" allowFiltering="true">
            <FieldEntry allowExtendedSearch="false">
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
      <StoreDialog setID="877" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="c7aaedf9-7a12-4042-aded-3ffd6ecec488" name="Standard Store Dialog" default="true" usage="NormalClients" version="5.1.0.1">
        <DialogFields>
          <StoreDialogField name="REGNO" displayName="REGNO" visible="true" orderNumber="1" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="BARCODE" displayName="BARCODE" visible="true" orderNumber="2" guid="5a02e01e-a88f-4090-9b26-cdcab1aa1c11" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="STATUS_DOC" displayName="STATUS_DOC" visible="true" orderNumber="3" guid="32780687-c5f5-47d7-b0f9-f42c43eebf0b" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="STATUS_REGDELSCAN" displayName="STATUS_REGDELSCAN" visible="true" orderNumber="4" guid="481e71b5-39f1-4940-b2ca-d947f052037f" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="STATUS_SUB_DOC" displayName="STATUS_SUB_DOC" visible="true" orderNumber="5" guid="c4b51e0d-6924-4a55-8687-7054b85c89ab" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="COMPANY_NAME" displayName="COMPANY_NAME" visible="true" orderNumber="6" guid="785d1e1a-c4f2-496b-af20-6fa59a841f5e" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="EQUIPMENT_NO" displayName="EQUIPMENT_NO" visible="true" orderNumber="7" guid="82cba8fc-5f75-48dc-be4c-52d8fd51d1ad" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="ASSET_NO" displayName="ASSET_NO" visible="true" orderNumber="8" guid="309699aa-187f-41dc-92ce-5bc7ce92355c" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="MAINTEN_ORDER" displayName="MAINTEN_ORDER" visible="true" orderNumber="9" guid="fcd4ec87-7224-4f05-b176-5beb45a00822" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="YEAR_REGIS" displayName="YEAR_REGIS" visible="true" orderNumber="10" guid="b1ab62a1-97e0-449b-a94d-7d5598399341" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="MONTH_INT" displayName="MONTH_INT" visible="true" orderNumber="11" guid="0b4478a4-84a2-41a6-ada8-d414f9548863" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="CONTRACT_NO" displayName="CONTRACT_NO" visible="true" orderNumber="12" guid="39f2710a-da41-4063-bbf5-06ae8594f407" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
              <AddWildcards>false</AddWildcards>
              <FixedText lock="false" enabled="false" isFixedEntry="true" predefinedEntry="EMPTY" type="Both">
              </FixedText>
              <MaskGuid>00000000-0000-0000-0000-000000000000</MaskGuid>
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldEntry>
          </StoreDialogField>
          <StoreDialogField name="FILE_NAME" displayName="FILE_NAME" visible="true" orderNumber="13" guid="e053017e-21ba-479d-9503-4556a62e35ad" allowFiltering="true" selectListOnly="false">
            <FieldEntry allowExtendedSearch="false">
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
        <ListView>
          <General displayFirstDocumentImmediately="false">
            <SortOrder>
              <Field fieldGuid="80b23501-6cbb-4dfc-af9c-8030e7a6d0d0" fieldID="-2147483648" field="Store Date" ascending="false" />
            </SortOrder>
          </General>
          <FieldLayouts>
            <FieldLayout visible="true" field="REGNO" displayName="REGNO" fieldGuid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" columnNumber="1">
              <Label letters="standard" label="REGNO" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="BARCODE" displayName="BARCODE" fieldGuid="5a02e01e-a88f-4090-9b26-cdcab1aa1c11" columnNumber="2">
              <Label letters="standard" label="BARCODE" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS_DOC" displayName="STATUS_DOC" fieldGuid="32780687-c5f5-47d7-b0f9-f42c43eebf0b" columnNumber="3">
              <Label letters="standard" label="STATUS_DOC" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS_REGDELSCAN" displayName="STATUS_REGDELSCAN" fieldGuid="481e71b5-39f1-4940-b2ca-d947f052037f" columnNumber="4">
              <Label letters="standard" label="STATUS_REGDELSCAN" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS_SUB_DOC" displayName="STATUS_SUB_DOC" fieldGuid="c4b51e0d-6924-4a55-8687-7054b85c89ab" columnNumber="5">
              <Label letters="standard" label="STATUS_SUB_DOC" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="COMPANY_NAME" displayName="COMPANY_NAME" fieldGuid="785d1e1a-c4f2-496b-af20-6fa59a841f5e" columnNumber="6">
              <Label letters="standard" label="COMPANY_NAME" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="EQUIPMENT_NO" displayName="EQUIPMENT_NO" fieldGuid="82cba8fc-5f75-48dc-be4c-52d8fd51d1ad" columnNumber="7">
              <Label letters="standard" label="EQUIPMENT_NO" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="ASSET_NO" displayName="ASSET_NO" fieldGuid="309699aa-187f-41dc-92ce-5bc7ce92355c" columnNumber="8">
              <Label letters="standard" label="ASSET_NO" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="MAINTEN_ORDER" displayName="MAINTEN_ORDER" fieldGuid="fcd4ec87-7224-4f05-b176-5beb45a00822" columnNumber="9">
              <Label letters="standard" label="MAINTEN_ORDER" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="YEAR_REGIS" displayName="YEAR_REGIS" fieldGuid="b1ab62a1-97e0-449b-a94d-7d5598399341" columnNumber="10">
              <Label letters="standard" label="YEAR_REGIS" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="MONTH_INT" displayName="MONTH_INT" fieldGuid="0b4478a4-84a2-41a6-ada8-d414f9548863" columnNumber="11">
              <Label letters="standard" label="MONTH_INT" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="CONTRACT_NO" displayName="CONTRACT_NO" fieldGuid="39f2710a-da41-4063-bbf5-06ae8594f407" columnNumber="12">
              <Label letters="standard" label="CONTRACT_NO" />
              <FieldCell textWrap="false" />
            </FieldLayout>
            <FieldLayout visible="true" field="FILE_NAME" displayName="File_Name" fieldGuid="e053017e-21ba-479d-9503-4556a62e35ad" columnNumber="13">
              <Label letters="standard" label="FILE_NAME" />
              <FieldCell textWrap="false" />
            </FieldLayout>
          </FieldLayouts>
        </ListView>
        <InfoDialog version="5.1.0.1" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="58d17599-3fae-4228-805a-c6aa890e18f2" name="Standard List View Result Dialog" default="true" usage="NormalClients">
          <FieldLayouts>
            <FieldLayout visible="true" field="REGNO" displayName="REGNO" fieldGuid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27" allowEdit="true" columnNumber="1" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="REGNO" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="BARCODE" displayName="BARCODE" fieldGuid="5a02e01e-a88f-4090-9b26-cdcab1aa1c11" allowEdit="true" columnNumber="2" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="BARCODE" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS_DOC" displayName="STATUS_DOC" fieldGuid="32780687-c5f5-47d7-b0f9-f42c43eebf0b" allowEdit="true" columnNumber="3" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="STATUS_DOC" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS_REGDELSCAN" displayName="STATUS_REGDELSCAN" fieldGuid="481e71b5-39f1-4940-b2ca-d947f052037f" allowEdit="true" columnNumber="4" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="STATUS_REGDELSCAN" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="STATUS_SUB_DOC" displayName="STATUS_SUB_DOC" fieldGuid="c4b51e0d-6924-4a55-8687-7054b85c89ab" allowEdit="true" columnNumber="5" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="STATUS_SUB_DOC" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="COMPANY_NAME" displayName="COMPANY_NAME" fieldGuid="785d1e1a-c4f2-496b-af20-6fa59a841f5e" allowEdit="true" columnNumber="6" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="COMPANY_NAME" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="EQUIPMENT_NO" displayName="EQUIPMENT_NO" fieldGuid="82cba8fc-5f75-48dc-be4c-52d8fd51d1ad" allowEdit="true" columnNumber="7" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="EQUIPMENT_NO" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="ASSET_NO" displayName="ASSET_NO" fieldGuid="309699aa-187f-41dc-92ce-5bc7ce92355c" allowEdit="true" columnNumber="8" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="ASSET_NO" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="MAINTEN_ORDER" displayName="MAINTEN_ORDER" fieldGuid="fcd4ec87-7224-4f05-b176-5beb45a00822" allowEdit="true" columnNumber="9" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="MAINTEN_ORDER" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="YEAR_REGIS" displayName="YEAR_REGIS" fieldGuid="b1ab62a1-97e0-449b-a94d-7d5598399341" allowEdit="true" columnNumber="10" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="YEAR_REGIS" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="MONTH_INT" displayName="MONTH_INT" fieldGuid="0b4478a4-84a2-41a6-ada8-d414f9548863" allowEdit="true" columnNumber="11" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="MONTH_INT" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="CONTRACT_NO" displayName="CONTRACT_NO" fieldGuid="39f2710a-da41-4063-bbf5-06ae8594f407" allowEdit="true" columnNumber="12" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="CONTRACT_NO" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
            <FieldLayout visible="true" field="FILE_NAME" displayName="File_Name" fieldGuid="e053017e-21ba-479d-9503-4556a62e35ad" allowEdit="true" columnNumber="13" maskGuid="00000000-0000-0000-0000-000000000000" allowFiltering="true" selectListOnly="false">
              <Label letters="standard" label="FILE_NAME" />
              <FieldCell textWrap="false" />
              <SelectLists totalNumber="0" allowInternalSelectList="true">
              </SelectLists>
            </FieldLayout>
          </FieldLayouts>
        </InfoDialog>
        <ViewerDialog version="5.1.0.1" fID="15" fGuid="843654d4-d212-4f60-b388-6cc6ccbb5520" guid="58d17599-3fae-4228-805a-c6aa890e18f2" name="Standard List View Result Dialog" default="true" usage="NormalClients" cachedDocuments="0" prefetchedDocuments="0" prefetchedFiles="0" prefetchedPages="0" mode="AdHokEditMode" zoomFactor="100" markFulltext="true" />
      </ResultList>
    </ResultLists>
  </Dialogs>
  <Misc maxIndexSearchHits="10000">
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
        <DBSettings dbConnectionGuid="4f625158-6c5c-497f-a17c-54dfbf94e71f" table="DWLOG_Siam_Pharmaceu1_EN041" maxRecords="10000" deleteFirstNRecords="1000" unlimitedLogEntries="false" />
      </DBRecord>
    </LoggingDestination>
  </LoggingDestinations>
</FileCabinet>';

?>
<?php     
      if($count==0){
		
		  
		  $str = $result["COLUMN_NAME"];
		  
		 if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED"){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE"){
			 $temp  =  '<UserField dwType="Date" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 } 

		 
		 
	
		  $word = $temp;
		 
		  $count++;
		  $check = $result["TABLE_NAME"];
		  
	  }else{
		  if ( $check == $result["TABLE_NAME"]){
		       $str = $result["COLUMN_NAME"];
			  if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED"){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE"){
			 $temp  =  '<UserField dwType="Date" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 } 
	
	
			  $word = $word.$temp ;
		  }else{
			  $filename = '<UserField dwType="TextVar" dwLength="255" dbName="FILE_NAME" displayName="FILE_NAME" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="true" notEmpty="true" guid="4c649757-68d8-4568-b6bf-407e3259a2dc">
      <DBType indexed="false" length="255" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
			  $finish = $start.$word.$filename.$end;
			//  echo $start.$word.$end;
			//  echo "</br>";
			  file_put_contents('cabinet_xml/'.$check.'.xml', $finish);
			  
			//  break;
			  $str = $result["COLUMN_NAME"];
			  
			  if($result["DATA_TYPE"]=="NVARCHAR2" || $result["DATA_TYPE"]=="VARCHAR2" || $result["DATA_TYPE"]=="UNDEFINED"){
			 $temp  =  '<UserField dwType="TextVar" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">NVarChar</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 } 
         if($result["DATA_TYPE"]=="DATE"){
			 $temp  =  '<UserField dwType="Date" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">DateTime</DBType>
      <FixedEntry>No</FixedEntry>
    </UserField>';
		 }
		  if($result["DATA_TYPE"]=="NUMBER"){
			 $temp  =  '<UserField dwType="Numeric" dwLength="'.$result["DATA_LENGTH"].'" dbName="'.$str.'" displayName="'.$str.'" dropLeadingZero="false" dropLeadingBlanks="false" usedAsDocumentName="false" notEmpty="false" guid="94515f6e-d6c5-4a9a-8ee0-e912c1328b27">
      <DBType indexed="false" length="'.$result["DATA_LENGTH"].'" uniqueType="None">Int</DBType>
      <Mask>{0}</Mask>
	  <FixedEntry>No</FixedEntry>
    </UserField>';	                   
		 } 
		      $word = $temp;
		 
			  $check = $result["TABLE_NAME"];
		
		  }
	  } 
	  
	  /*
         if($result["TABLE_NAME"] == $stringnajaja ){
			 $stringnaja = $stringnaja+$result["COLUMN_NAME"];
		 }else {
			 
		 }
      */ 
		 //$word = $result["TABLE_NAME"];
		 
?>

<?php  } ?>


</table>
<?php  echo "wow";  ?>

