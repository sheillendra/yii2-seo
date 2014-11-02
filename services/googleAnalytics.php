<?php
namespace sheillendra\seo\services;

use yii\base\Component;

class GoogleAnalytics extends Component {
    public $id;
    public $trackerId;
    public $domain='auto';
    
    public function getScript(){
        return "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '".$this->trackerId."', '".$this->domain."');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');";
    }
} 