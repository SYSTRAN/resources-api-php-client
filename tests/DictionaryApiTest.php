<?php
require_once(__DIR__ . '/../autoload.php');
require_once(__DIR__ . '/../lib/ResourcesApi/DictionaryApi.php');
require_once(__DIR__ . '/../vendor/autoload.php');

class DictionaryApiTest extends PHPUnit_Framework_TestCase
{
    var $config;
    var $api_client;
    var $dic_id;
    public function setUp()
    {
        $this->config = new \Systran\Client\Configuration();
        $api_key = new SplFileObject(__DIR__ . '/../apiKey.txt');
        $this->config->setApiKey("key",$api_key->fgets());
        $this->config->setHost("https://platform.systran.net:8904");
        $this->api_client = new \Systran\Client\ApiClient($this->config);
    }

    public function testDictionaryAddPost()
    {

        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $input = new \Systran\Client\Model\DictionaryAddBody();
        $input->setDictionary(new \Systran\Client\Model\DictionaryAddInput([ "source_lang" => "en", "name" => "phpClientTest", "target_langs" => "fr","comments" => "this is a test for the php client library", "type" => ""]));
        $this->dic_id = $resources_api->resourcesDictionaryAddPost($input)->getAdded()->getId();
        $this->assertNotNull($this->dic_id);
        return $this->dic_id;

    }

    /**
     * @depends testDictionaryAddPost
     */
    public function testDictionaryEntryAddPost($dic_id)
    {

        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesDictionaryEntryAddPost($dic_id, new \Systran\Client\Model\EntryAddBody(["entry" => ["sourceLang" =>  "en",   "targetLang" => "fr", "source" => "test", "target" => "test", "type" =>  "", "sourcePos" => "", "targetPos" => "", "priority" => ""]])));
    }
    public function testDictionaryEntryImportPost()
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
      //  $this->assertNotNull($resources_api->resourcesDictionaryEntryImportPost($this->dic_id, "en", $import_file));
    }
    public function testDictionaryListPost()
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesDictionaryListPost([]));
    }
    /**
     * @depends testDictionaryAddPost
     */
    public function testDictionaryEntryListPost($dic_id)
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesDictionaryEntryListPost($dic_id));
    }
    /**
     * @depends testDictionaryAddPost
     */
    public function testDictionaryEntryUpdatePost($dic_id)
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $entries_list = $resources_api->resourcesDictionaryEntryListPost($dic_id)->getEntries()[0];

        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $resources_api->resourcesDictionaryEntryUpdatePost($dic_id,  new \Systran\Client\Model\EntryUpdateBody(["source_id" =>  $entries_list->getSourceId(), "target_id" =>  $entries_list->getTargetId() ,"sourceVid" =>  0, "targetVid" =>  0, "update" =>  [ "sourceLang" => "en", "targetLang" =>  "fr", "source" => "example", "target" => "exemple", "type" => "", "sourcePos" => "", "targetPos" => "", "priority" => "" ]]));
    }
    /**
     * @depends testDictionaryAddPost
     */
    public function testDictionaryEntryDeletePost($dic_id)
    {

        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
       $entries_list = $resources_api->resourcesDictionaryEntryListPost($dic_id)->getEntries()[0];

        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesDictionaryEntryDeletePost($dic_id, new \Systran\Client\Model\EntryDeleteBody(["entry" =>[ "sourceId" => $entries_list->getSourceId(), "targetId" =>  $entries_list->getTargetId(), "sourceVid" =>  0, "targetVid" =>  0]])));
    }
    public function testDictionaryLookupGet()
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesDictionaryLookupGet("en", "fr", ["test"]));
    }
    public function testDictionaryLookupSupportedLanguagesGet()
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesDictionaryLookupSupportedLanguagesGet());
    }
    public function testDictionarySupportedLanguagesGet()
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesDictionarySupportedLanguagesGet());
    }
    /**
     * @depends testDictionaryAddPost
     */
    public function testDictionaryDictionaryUpdatePost($dic_id)
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $this->assertNotNull(  $resources_api->resourcesDictionaryUpdatePost($dic_id, new \Systran\Client\Model\DictionaryUpdateBody(["dictionary" =>[ "source_lang" => "en", "name" => "phpClientTest", "target_langs" => "fr", "comments" => "This dictionary has been updated for php client testing purposes","type" => ""]])));
    }
    /**
     * @depends testDictionaryAddPost
     */
    public function testDictionaryDeletePost($dic_id)
    {
        $resources_api = new \Systran\Client\DictionaryApi($this->api_client);
        $resources_api->resourcesDictionaryDeletePost($dic_id);
    }
}
