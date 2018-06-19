<?php
namespace Grav\Plugin\Shortcodes;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class CodepenShortcode extends Shortcode{
    public function init(){
        $this->shortcode->getHandlers()->add('codepen', function(ShortcodeInterface $sc) {
            // Add js for processing
            $this->shortcode->addAssets('js', ['https://production-assets.codepen.io/assets/embed/ei.js', ['loading' => 'async']]);

            $content = $sc->getContent();
            $id = $sc->getParameter('id');
            $user = $sc->getParameter('user', '');
            $title = $sc->getParameter('title', '');
            $preview = $sc->getParameter('preview', true);
            $height = $sc->getParameter('height', '265');
            $defaultTab = $sc->getParameter('defaultTab', 'js,result');
            
            $output = $this->twig->processTemplate('partials/codepen.html.twig', [
                'id' => $id,
                'user' => $user,
                'title' => $title,
                'preview' => $preview,
                'height' => $height,
                'defaultTab' => $defaultTab,
                'content' => $content,
            ]);
            
            return $output;
        });
    }
}
