<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            
        	new Liuggio\ExcelBundle\LiuggioExcelBundle(),
          
            new Xtending\EntityBundle\EntityBundle(),
            new Xtending\SecurityXtendingBundle\SecurityXtendingBundle(),
            new Xtending\RoleBundle\RoleBundle(),
        	
        	new Xtending\ServicesBundle\ServicesBundle(),
            
        	new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle(),
        	new Ps\PdfBundle\PsPdfBundle(),
        	new Sensio\Bundle\DistributionBundle\SensioDistributionBundle(),
            new Amateur\ObjectBundle\ObjectBundle(),
            new Amateur\UserBundle\UserBundle(),
            new Amateur\EventBundle\EventBundle(),
            new Amateur\NewsUserBundle\NewsUserBundle(),
        	new Sensio\Bundle\BuzzBundle\SensioBuzzBundle(),
        	new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),
        	
                    );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            
            
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
