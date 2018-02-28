<?php

/* ::base.html.twig */
class __TwigTemplate_375c493ea31766cedfa0c3ceb149f16656c506b43ba87ba74b6b7bdbe4ffbe57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d00c2028c79e95be1f16c8ce31d83f25c7b23f7888c54350b352becc3d62286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d00c2028c79e95be1f16c8ce31d83f25c7b23f7888c54350b352becc3d62286->enter($__internal_1d00c2028c79e95be1f16c8ce31d83f25c7b23f7888c54350b352becc3d62286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6137e1363445fe39d1f4a0c7f21436b43692f6aec373faef00e5d17b72ed3c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6137e1363445fe39d1f4a0c7f21436b43692f6aec373faef00e5d17b72ed3c46->enter($__internal_6137e1363445fe39d1f4a0c7f21436b43692f6aec373faef00e5d17b72ed3c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html  >
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "



        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>

";
        
        $__internal_1d00c2028c79e95be1f16c8ce31d83f25c7b23f7888c54350b352becc3d62286->leave($__internal_1d00c2028c79e95be1f16c8ce31d83f25c7b23f7888c54350b352becc3d62286_prof);

        
        $__internal_6137e1363445fe39d1f4a0c7f21436b43692f6aec373faef00e5d17b72ed3c46->leave($__internal_6137e1363445fe39d1f4a0c7f21436b43692f6aec373faef00e5d17b72ed3c46_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_147628e0dc7618333a18c2ac1c90153cbb4f985274a496d49dfd76678c1039b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147628e0dc7618333a18c2ac1c90153cbb4f985274a496d49dfd76678c1039b4->enter($__internal_147628e0dc7618333a18c2ac1c90153cbb4f985274a496d49dfd76678c1039b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c66be8ecbf744e1d750c3e3e8627a3adf13cd41501c6992102811a4dd2dcc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c66be8ecbf744e1d750c3e3e8627a3adf13cd41501c6992102811a4dd2dcc1a->enter($__internal_7c66be8ecbf744e1d750c3e3e8627a3adf13cd41501c6992102811a4dd2dcc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7c66be8ecbf744e1d750c3e3e8627a3adf13cd41501c6992102811a4dd2dcc1a->leave($__internal_7c66be8ecbf744e1d750c3e3e8627a3adf13cd41501c6992102811a4dd2dcc1a_prof);

        
        $__internal_147628e0dc7618333a18c2ac1c90153cbb4f985274a496d49dfd76678c1039b4->leave($__internal_147628e0dc7618333a18c2ac1c90153cbb4f985274a496d49dfd76678c1039b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf2bbbd195096c4c107626e8bda6742c1b7505beedd9b92202ce2e2b85ec9075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2bbbd195096c4c107626e8bda6742c1b7505beedd9b92202ce2e2b85ec9075->enter($__internal_cf2bbbd195096c4c107626e8bda6742c1b7505beedd9b92202ce2e2b85ec9075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_333507125123054a354eb026ca10ff05cd89e4cb1ad8f6452dd24352ed8554d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333507125123054a354eb026ca10ff05cd89e4cb1ad8f6452dd24352ed8554d0->enter($__internal_333507125123054a354eb026ca10ff05cd89e4cb1ad8f6452dd24352ed8554d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <style>
.fa-angle-right{

    float:right;

}
</style>
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/shop-homepage.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
      
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
              
        ";
        
        $__internal_333507125123054a354eb026ca10ff05cd89e4cb1ad8f6452dd24352ed8554d0->leave($__internal_333507125123054a354eb026ca10ff05cd89e4cb1ad8f6452dd24352ed8554d0_prof);

        
        $__internal_cf2bbbd195096c4c107626e8bda6742c1b7505beedd9b92202ce2e2b85ec9075->leave($__internal_cf2bbbd195096c4c107626e8bda6742c1b7505beedd9b92202ce2e2b85ec9075_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_c97f85bc3c70a582c3530fd7140a78b8787af2182a3b75fcecff3fa56e054eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97f85bc3c70a582c3530fd7140a78b8787af2182a3b75fcecff3fa56e054eac->enter($__internal_c97f85bc3c70a582c3530fd7140a78b8787af2182a3b75fcecff3fa56e054eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_730a9222ee255adcea10b2690e60eb65480dd5192532f1dd2baaa7ce7d69c6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730a9222ee255adcea10b2690e60eb65480dd5192532f1dd2baaa7ce7d69c6f8->enter($__internal_730a9222ee255adcea10b2690e60eb65480dd5192532f1dd2baaa7ce7d69c6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_730a9222ee255adcea10b2690e60eb65480dd5192532f1dd2baaa7ce7d69c6f8->leave($__internal_730a9222ee255adcea10b2690e60eb65480dd5192532f1dd2baaa7ce7d69c6f8_prof);

        
        $__internal_c97f85bc3c70a582c3530fd7140a78b8787af2182a3b75fcecff3fa56e054eac->leave($__internal_c97f85bc3c70a582c3530fd7140a78b8787af2182a3b75fcecff3fa56e054eac_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb43941eb8f06c2ee81b67efc54d63b8b91b88f03c67e43a6a38675cef519f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb43941eb8f06c2ee81b67efc54d63b8b91b88f03c67e43a6a38675cef519f14->enter($__internal_fb43941eb8f06c2ee81b67efc54d63b8b91b88f03c67e43a6a38675cef519f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4ec56cbc2ebde720448cf14b5bb86b5dfd178d18d66a54a02170300007f0ced7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec56cbc2ebde720448cf14b5bb86b5dfd178d18d66a54a02170300007f0ced7->enter($__internal_4ec56cbc2ebde720448cf14b5bb86b5dfd178d18d66a54a02170300007f0ced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo " 
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>

<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>

  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/FrontQuery.js"), "html", null, true);
        echo "\"></script>

      
  <script>
  \$( function() {
    var tabs = \$( \"#tabs\" ).tabs();
    tabs.find( \".ui-tabs-nav\" ).sortable({
      axis: \"x\",
      stop: function() {
        tabs.tabs( \"refresh\" );
      }
    });
  } );
  

  // Ici, le DOM est entièrement défini



 </script>
        ";
        
        $__internal_4ec56cbc2ebde720448cf14b5bb86b5dfd178d18d66a54a02170300007f0ced7->leave($__internal_4ec56cbc2ebde720448cf14b5bb86b5dfd178d18d66a54a02170300007f0ced7_prof);

        
        $__internal_fb43941eb8f06c2ee81b67efc54d63b8b91b88f03c67e43a6a38675cef519f14->leave($__internal_fb43941eb8f06c2ee81b67efc54d63b8b91b88f03c67e43a6a38675cef519f14_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 37,  162 => 36,  154 => 30,  145 => 29,  128 => 24,  112 => 16,  108 => 15,  104 => 14,  95 => 7,  86 => 6,  68 => 5,  55 => 58,  53 => 29,  47 => 25,  45 => 24,  41 => 22,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html  >
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <style>
.fa-angle-right{

    float:right;

}
</style>
  <link rel=\"stylesheet\" href=\"{{ asset('style/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('style/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('style/css/shop-homepage.css') }}\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
      
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
              
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}




        {% block javascripts %}
 
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>

<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>

  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/FrontQuery.js') }}\"></script>

      
  <script>
  \$( function() {
    var tabs = \$( \"#tabs\" ).tabs();
    tabs.find( \".ui-tabs-nav\" ).sortable({
      axis: \"x\",
      stop: function() {
        tabs.tabs( \"refresh\" );
      }
    });
  } );
  

  // Ici, le DOM est entièrement défini



 </script>
        {% endblock %}
    </body>
</html>

", "::base.html.twig", "/var/www/html/MyJoob/app/Resources/views/base.html.twig");
    }
}
