<?php
require_once(__DIR__ . '/../autoload.php');
require_once(__DIR__ . '/../lib/ResourcesApi/CorpusApi.php');
require_once(__DIR__ . '/../vendor/autoload.php');

class CorpusApiTest extends PHPUnit_Framework_TestCase
{
    var $config;
    var $api_client;
    var $id;

    public function setUp()
    {
        $this->config = new \Systran\Client\Configuration();
        $api_key = new SplFileObject(__DIR__ . '/../apiKey.txt');
        $this->config->setApiKey("key",$api_key->fgets());
        $this->config->setHost("https://platform.systran.net:8904");
        $this->api_client = new \Systran\Client\ApiClient($this->config);
    }

    public function testCorpusAddPost()
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->id = $resources_api->resourcesCorpusAddPost("PhpClientTest", "en")->getCorpus()->getId();
        $this->assertNotNull($this->id);
        return $this->id;
    }
    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusDetailsGet($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusDetailsGet($id));
    }
    public function testCorpusExistsGet()
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusExistsGet("PhpClientTest"));
    }
    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusExportGet($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusExportGet($id));
    }
//    public function testCorpusImportPost()
//    {
//        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
//        $this->assertNotNull($resources_api->resourcesCorpusImportPost("PhpClientTest"));
//    }
    public function testCorpusListGet()
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusListGet());
    }

    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusSegmentAddPost($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusSegmentAddPost(new \Systran\Client\Model\CorpusSegmentAddRequest(["corpus_id" =>$id, "segments"=> new \Systran\Client\Model\CorpusAddSegment(["lang" => "en", "source" => "Exemple de traduction", "targets" =>  [new \Systran\Client\Model\CorpusAddSegmentTarget(["lang" =>  "fr", "target"=> "Translation example"])]])])));
    }

    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusSegmentListGet($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusSegmentListGet($id));
    }


    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusSegmentTargetAddPost($id)
    {

        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $target = new \Systran\Client\Model\CorpusSegmentTarget(["id"=> "temp", "lang"=> "en", "target"=> "added segment one" ]);
        $seg_id = $resources_api->resourcesCorpusSegmentListGet($id)->getSegments()[0]->getId();
        $this->assertNotNull($resources_api->resourcesCorpusSegmentTargetAddPost( new \Systran\Client\Model\CorpusSegmentAddTargetRequest(["corpus_id" => $id, "seg_id" => $seg_id, "targets" => [$target]])));
    }
    /**
     * @depends testCorpusAddPost
     */

    public function testCorpusMatchGet($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusMatchGet([$id], ["PhpClientTest"], "en", "en"));
    }
    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusSegmentTargetDeletePost($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusSegmentTargetDeletePost($id,  $resources_api->resourcesCorpusSegmentListGet($id)->getSegments()[0]->getId(),[$resources_api->resourcesCorpusSegmentListGet($id)->getSegments()[0]->getTargets()[0]->getId()]));
    }
    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusSegmentUpdatePost($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $target = new \Systran\Client\Model\CorpusSegmentTarget(["id"=> "temp", "lang"=> "fr", "target"=> "added segment two" ]);

        $this->assertNotNull($resources_api->resourcesCorpusSegmentUpdatePost($id, $resources_api->resourcesCorpusSegmentListGet($id)->getSegments()[0]->getId(), null, $resources_api->resourcesCorpusSegmentListGet($id)->getSegments()[0]->getTargets()[0]->getId(), $target, "zh" ));
    }

    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusSegmentDeletePost($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusSegmentDeletePost($id,  [$resources_api->resourcesCorpusSegmentListGet($id)->getSegments()[0]->getId()]));
    }
    /**
     * @depends testCorpusAddPost
     */
    public function testCorpusDeletePost($id)
    {
        $resources_api = new \Systran\Client\CorpusApi($this->api_client);
        $this->assertNotNull($resources_api->resourcesCorpusDeletePost($id));
    }

}
