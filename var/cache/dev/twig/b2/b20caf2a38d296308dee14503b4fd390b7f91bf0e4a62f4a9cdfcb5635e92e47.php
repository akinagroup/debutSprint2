<?php

/* ::Layout/layout.html.twig */
class __TwigTemplate_789d81f764a9b81be538b37276d980bf9005398f10e538408654e848046c9fe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::Layout/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'Content' => array($this, 'block_Content'),
            'header' => array($this, 'block_header'),
            'connexion' => array($this, 'block_connexion'),
            'contenu' => array($this, 'block_contenu'),
            'formu' => array($this, 'block_formu'),
            'carrousel' => array($this, 'block_carrousel'),
            'form' => array($this, 'block_form'),
            'catalogue' => array($this, 'block_catalogue'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5a76ae2c69594f70948ecf39cc331e594e8b88ffbb2afa1e4bc65c28508369d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a76ae2c69594f70948ecf39cc331e594e8b88ffbb2afa1e4bc65c28508369d->enter($__internal_b5a76ae2c69594f70948ecf39cc331e594e8b88ffbb2afa1e4bc65c28508369d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Layout/layout.html.twig"));

        $__internal_44107f5229adc7f95f97c5c1a83c5be4d044df900ce374fe325501cdb88618f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44107f5229adc7f95f97c5c1a83c5be4d044df900ce374fe325501cdb88618f6->enter($__internal_44107f5229adc7f95f97c5c1a83c5be4d044df900ce374fe325501cdb88618f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Layout/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5a76ae2c69594f70948ecf39cc331e594e8b88ffbb2afa1e4bc65c28508369d->leave($__internal_b5a76ae2c69594f70948ecf39cc331e594e8b88ffbb2afa1e4bc65c28508369d_prof);

        
        $__internal_44107f5229adc7f95f97c5c1a83c5be4d044df900ce374fe325501cdb88618f6->leave($__internal_44107f5229adc7f95f97c5c1a83c5be4d044df900ce374fe325501cdb88618f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_278b6a78f11e0f84fa8abd74bbf2d72c68e4f5435895c6826c07678b04b2b4da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278b6a78f11e0f84fa8abd74bbf2d72c68e4f5435895c6826c07678b04b2b4da->enter($__internal_278b6a78f11e0f84fa8abd74bbf2d72c68e4f5435895c6826c07678b04b2b4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33d684af6fc2c788e1e656cb65f52f9a6e5692fe77dbfec9e0ae84a4cd56e03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d684af6fc2c788e1e656cb65f52f9a6e5692fe77dbfec9e0ae84a4cd56e03d->enter($__internal_33d684af6fc2c788e1e656cb65f52f9a6e5692fe77dbfec9e0ae84a4cd56e03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/FrontQuery.js"), "html", null, true);
        echo "\"></script>
 
   
    ";
        // line 8
        $this->displayBlock('Content', $context, $blocks);
        // line 113
        echo " 

";
        
        $__internal_33d684af6fc2c788e1e656cb65f52f9a6e5692fe77dbfec9e0ae84a4cd56e03d->leave($__internal_33d684af6fc2c788e1e656cb65f52f9a6e5692fe77dbfec9e0ae84a4cd56e03d_prof);

        
        $__internal_278b6a78f11e0f84fa8abd74bbf2d72c68e4f5435895c6826c07678b04b2b4da->leave($__internal_278b6a78f11e0f84fa8abd74bbf2d72c68e4f5435895c6826c07678b04b2b4da_prof);

    }

    // line 8
    public function block_Content($context, array $blocks = array())
    {
        $__internal_2fe12c767fabbd7e8756cfcfbefa72d1ff5dea922ad7072afd220eb56a0c90e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe12c767fabbd7e8756cfcfbefa72d1ff5dea922ad7072afd220eb56a0c90e4->enter($__internal_2fe12c767fabbd7e8756cfcfbefa72d1ff5dea922ad7072afd220eb56a0c90e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_635e81d5062773ef367de4567f795e60fcc002d4c173cd23f78d9a548d0bca2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635e81d5062773ef367de4567f795e60fcc002d4c173cd23f78d9a548d0bca2e->enter($__internal_635e81d5062773ef367de4567f795e60fcc002d4c173cd23f78d9a548d0bca2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 9
        echo "    
          ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "           ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 99
        echo "
    <!-- Footer -->
    ";
        // line 101
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "
    <!-- Bootstrap core JavaScript -->    

   ";
        
        $__internal_635e81d5062773ef367de4567f795e60fcc002d4c173cd23f78d9a548d0bca2e->leave($__internal_635e81d5062773ef367de4567f795e60fcc002d4c173cd23f78d9a548d0bca2e_prof);

        
        $__internal_2fe12c767fabbd7e8756cfcfbefa72d1ff5dea922ad7072afd220eb56a0c90e4->leave($__internal_2fe12c767fabbd7e8756cfcfbefa72d1ff5dea922ad7072afd220eb56a0c90e4_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_dfd5ea574b21404fee7129f88b9a7176f4cc2dd0a1974ea2ce6da4c4b14d55dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd5ea574b21404fee7129f88b9a7176f4cc2dd0a1974ea2ce6da4c4b14d55dd->enter($__internal_dfd5ea574b21404fee7129f88b9a7176f4cc2dd0a1974ea2ce6da4c4b14d55dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d57ba7584d3f8fedb88021e0fadc61daaa53058d7b17eaf797c4ef5ce5e86687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57ba7584d3f8fedb88021e0fadc61daaa53058d7b17eaf797c4ef5ce5e86687->enter($__internal_d57ba7584d3f8fedb88021e0fadc61daaa53058d7b17eaf797c4ef5ce5e86687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "        <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" >
      <div class=\"container\">
       <div class=\"row\">
         
          <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo change.png"), "html", null, true);
        echo "\" style=\"width:60px\">
           <h1 class=\"my-4\" style=\"color:white\">Immobilier</h1>
           </div> 

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\" >
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
             ";
        // line 39
        $this->displayBlock('connexion', $context, $blocks);
        // line 42
        echo "          </ul>
        </div>
      </div>
    </nav>
          ";
        
        $__internal_d57ba7584d3f8fedb88021e0fadc61daaa53058d7b17eaf797c4ef5ce5e86687->leave($__internal_d57ba7584d3f8fedb88021e0fadc61daaa53058d7b17eaf797c4ef5ce5e86687_prof);

        
        $__internal_dfd5ea574b21404fee7129f88b9a7176f4cc2dd0a1974ea2ce6da4c4b14d55dd->leave($__internal_dfd5ea574b21404fee7129f88b9a7176f4cc2dd0a1974ea2ce6da4c4b14d55dd_prof);

    }

    // line 39
    public function block_connexion($context, array $blocks = array())
    {
        $__internal_233e0c7e98c06936ebc5e8eb4d1f3e124383abbef34b72a49f63f4f6c1899852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233e0c7e98c06936ebc5e8eb4d1f3e124383abbef34b72a49f63f4f6c1899852->enter($__internal_233e0c7e98c06936ebc5e8eb4d1f3e124383abbef34b72a49f63f4f6c1899852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_fcbf9deb3e615d7f0c6637b723fe3e5fb928ed283ca2f75792236244966fab92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbf9deb3e615d7f0c6637b723fe3e5fb928ed283ca2f75792236244966fab92->enter($__internal_fcbf9deb3e615d7f0c6637b723fe3e5fb928ed283ca2f75792236244966fab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        // line 40
        echo "                                <li class=\"nav-item\" style=\"margin-left:100px;border:2px solid white;height:20px;padding-top:-10px\"><a class=\"btn nav-link btn-dark btn-xs\" href=\"#\">Connexion / Inscription</a></li>
 ";
        
        $__internal_fcbf9deb3e615d7f0c6637b723fe3e5fb928ed283ca2f75792236244966fab92->leave($__internal_fcbf9deb3e615d7f0c6637b723fe3e5fb928ed283ca2f75792236244966fab92_prof);

        
        $__internal_233e0c7e98c06936ebc5e8eb4d1f3e124383abbef34b72a49f63f4f6c1899852->leave($__internal_233e0c7e98c06936ebc5e8eb4d1f3e124383abbef34b72a49f63f4f6c1899852_prof);

    }

    // line 47
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0038a318951cf7e2c251e45801acf3ad91c0319048f2eab737cc7680773b4ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0038a318951cf7e2c251e45801acf3ad91c0319048f2eab737cc7680773b4ae8->enter($__internal_0038a318951cf7e2c251e45801acf3ad91c0319048f2eab737cc7680773b4ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_033c700819cf5575bb0e651c55ad4f481da6cb0f2237d2d94c0ca45986bca2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033c700819cf5575bb0e651c55ad4f481da6cb0f2237d2d94c0ca45986bca2bd->enter($__internal_033c700819cf5575bb0e651c55ad4f481da6cb0f2237d2d94c0ca45986bca2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 48
        echo "             <div class=\"container\" style=\"margin-top:40px\">
              ";
        // line 49
        $this->displayBlock('formu', $context, $blocks);
        // line 50
        echo "          ";
        $this->displayBlock('carrousel', $context, $blocks);
        // line 88
        echo "      ";
        $this->displayBlock('catalogue', $context, $blocks);
        // line 91
        echo "        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
     
</div>
     ";
        
        $__internal_033c700819cf5575bb0e651c55ad4f481da6cb0f2237d2d94c0ca45986bca2bd->leave($__internal_033c700819cf5575bb0e651c55ad4f481da6cb0f2237d2d94c0ca45986bca2bd_prof);

        
        $__internal_0038a318951cf7e2c251e45801acf3ad91c0319048f2eab737cc7680773b4ae8->leave($__internal_0038a318951cf7e2c251e45801acf3ad91c0319048f2eab737cc7680773b4ae8_prof);

    }

    // line 49
    public function block_formu($context, array $blocks = array())
    {
        $__internal_d44bbb6f502523997c9fa83ce289421569366a013a15f0a5df130c5af21934d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44bbb6f502523997c9fa83ce289421569366a013a15f0a5df130c5af21934d4->enter($__internal_d44bbb6f502523997c9fa83ce289421569366a013a15f0a5df130c5af21934d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        $__internal_2fb3aba9c4db2b09d4233fcbf30b28bf4c81298fb257d6c8d6749f9064ba01ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb3aba9c4db2b09d4233fcbf30b28bf4c81298fb257d6c8d6749f9064ba01ae->enter($__internal_2fb3aba9c4db2b09d4233fcbf30b28bf4c81298fb257d6c8d6749f9064ba01ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        
        $__internal_2fb3aba9c4db2b09d4233fcbf30b28bf4c81298fb257d6c8d6749f9064ba01ae->leave($__internal_2fb3aba9c4db2b09d4233fcbf30b28bf4c81298fb257d6c8d6749f9064ba01ae_prof);

        
        $__internal_d44bbb6f502523997c9fa83ce289421569366a013a15f0a5df130c5af21934d4->leave($__internal_d44bbb6f502523997c9fa83ce289421569366a013a15f0a5df130c5af21934d4_prof);

    }

    // line 50
    public function block_carrousel($context, array $blocks = array())
    {
        $__internal_00a25a2e855b7559ea9c95c4aebdc26a5480e74a89b23768ff148dd5a0ea3653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a25a2e855b7559ea9c95c4aebdc26a5480e74a89b23768ff148dd5a0ea3653->enter($__internal_00a25a2e855b7559ea9c95c4aebdc26a5480e74a89b23768ff148dd5a0ea3653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrousel"));

        $__internal_a8348a9bb61074acd8ae14aecc27d0548d560272ba503f7eec7b6b88bcd7cd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8348a9bb61074acd8ae14aecc27d0548d560272ba503f7eec7b6b88bcd7cd3a->enter($__internal_a8348a9bb61074acd8ae14aecc27d0548d560272ba503f7eec7b6b88bcd7cd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrousel"));

        // line 51
        echo "   
      <div class=\"row\">

        <div class=\"col-lg-3\" >
         <div class=\"list-group\">
            ";
        // line 56
        $this->displayBlock('form', $context, $blocks);
        // line 57
        echo "          </div>
          <div class=\"list-group\">
            <li class=\"list-group-item\"> <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/une.png"), "html", null, true);
        echo "\" style=\"width:190px\"></li>
            <li class=\"list-group-item\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/images4.jpeg"), "html", null, true);
        echo "\" style=\"width:190px\"><a href=\"#\">Reserver</a></li>
            <li class=\"list-group-item\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/images3.jpeg"), "html", null, true);
        echo "\" style=\"width:190px\"><a href=\"#\">Reserver</a></li>
          </div>

          

        </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">

          <div class=\"my-4\" >
            
            
              <div>
                <img class=\"d-block img-fluid\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/01.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                <div>

                </div>
              </div>
              
       
           
            
          </div>
                   

          ";
        
        $__internal_a8348a9bb61074acd8ae14aecc27d0548d560272ba503f7eec7b6b88bcd7cd3a->leave($__internal_a8348a9bb61074acd8ae14aecc27d0548d560272ba503f7eec7b6b88bcd7cd3a_prof);

        
        $__internal_00a25a2e855b7559ea9c95c4aebdc26a5480e74a89b23768ff148dd5a0ea3653->leave($__internal_00a25a2e855b7559ea9c95c4aebdc26a5480e74a89b23768ff148dd5a0ea3653_prof);

    }

    // line 56
    public function block_form($context, array $blocks = array())
    {
        $__internal_83793a9549363352e9b0532091ec6be2f8fb5487510c00c971d64bf84b6b33b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83793a9549363352e9b0532091ec6be2f8fb5487510c00c971d64bf84b6b33b2->enter($__internal_83793a9549363352e9b0532091ec6be2f8fb5487510c00c971d64bf84b6b33b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_7d3845d5ed97d822ecc926f7482f5f29fe772ca7e57e1e277152e8a12a8f7672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3845d5ed97d822ecc926f7482f5f29fe772ca7e57e1e277152e8a12a8f7672->enter($__internal_7d3845d5ed97d822ecc926f7482f5f29fe772ca7e57e1e277152e8a12a8f7672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_7d3845d5ed97d822ecc926f7482f5f29fe772ca7e57e1e277152e8a12a8f7672->leave($__internal_7d3845d5ed97d822ecc926f7482f5f29fe772ca7e57e1e277152e8a12a8f7672_prof);

        
        $__internal_83793a9549363352e9b0532091ec6be2f8fb5487510c00c971d64bf84b6b33b2->leave($__internal_83793a9549363352e9b0532091ec6be2f8fb5487510c00c971d64bf84b6b33b2_prof);

    }

    // line 88
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_35908ddd0e24207fe0fcba61d0c5bcdec021d54f118a5d0d598601e1d316cf57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35908ddd0e24207fe0fcba61d0c5bcdec021d54f118a5d0d598601e1d316cf57->enter($__internal_35908ddd0e24207fe0fcba61d0c5bcdec021d54f118a5d0d598601e1d316cf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_eef8b255e96e9495fad060198ec01c0695c8dcba4ba1961bde2a8e9146ba7900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef8b255e96e9495fad060198ec01c0695c8dcba4ba1961bde2a8e9146ba7900->enter($__internal_eef8b255e96e9495fad060198ec01c0695c8dcba4ba1961bde2a8e9146ba7900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 89
        echo "     
 ";
        
        $__internal_eef8b255e96e9495fad060198ec01c0695c8dcba4ba1961bde2a8e9146ba7900->leave($__internal_eef8b255e96e9495fad060198ec01c0695c8dcba4ba1961bde2a8e9146ba7900_prof);

        
        $__internal_35908ddd0e24207fe0fcba61d0c5bcdec021d54f118a5d0d598601e1d316cf57->leave($__internal_35908ddd0e24207fe0fcba61d0c5bcdec021d54f118a5d0d598601e1d316cf57_prof);

    }

    // line 101
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dd4919c4d4b07c37c8e3c7db94d49a712bc2c53eb49927aab2d64832aec908b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4919c4d4b07c37c8e3c7db94d49a712bc2c53eb49927aab2d64832aec908b5->enter($__internal_dd4919c4d4b07c37c8e3c7db94d49a712bc2c53eb49927aab2d64832aec908b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_37d7af51c9a4b908aa6221c8c51f94ec5e74a3cd7dedb8d585a567859a8cceef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d7af51c9a4b908aa6221c8c51f94ec5e74a3cd7dedb8d585a567859a8cceef->enter($__internal_37d7af51c9a4b908aa6221c8c51f94ec5e74a3cd7dedb8d585a567859a8cceef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 102
        echo "<footer class=\"py-5 bg-dark \">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Akina Group 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    ";
        
        $__internal_37d7af51c9a4b908aa6221c8c51f94ec5e74a3cd7dedb8d585a567859a8cceef->leave($__internal_37d7af51c9a4b908aa6221c8c51f94ec5e74a3cd7dedb8d585a567859a8cceef_prof);

        
        $__internal_dd4919c4d4b07c37c8e3c7db94d49a712bc2c53eb49927aab2d64832aec908b5->leave($__internal_dd4919c4d4b07c37c8e3c7db94d49a712bc2c53eb49927aab2d64832aec908b5_prof);

    }

    public function getTemplateName()
    {
        return "::Layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 102,  356 => 101,  345 => 89,  336 => 88,  319 => 56,  296 => 75,  279 => 61,  275 => 60,  271 => 59,  267 => 57,  265 => 56,  258 => 51,  249 => 50,  232 => 49,  215 => 91,  212 => 88,  209 => 50,  207 => 49,  204 => 48,  195 => 47,  184 => 40,  175 => 39,  161 => 42,  159 => 39,  133 => 16,  126 => 11,  117 => 10,  104 => 110,  102 => 101,  98 => 99,  95 => 47,  93 => 10,  90 => 9,  81 => 8,  69 => 113,  67 => 8,  61 => 5,  58 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}

  <script src=\"{{ asset('js/FrontQuery.js') }}\"></script>
 
   
    {% block Content %}
    
          {% block header %}
        <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" >
      <div class=\"container\">
       <div class=\"row\">
         
          <img src=\"{{ asset('img/logo change.png')}}\" style=\"width:60px\">
           <h1 class=\"my-4\" style=\"color:white\">Immobilier</h1>
           </div> 

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\" >
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
             {% block connexion %}
                                <li class=\"nav-item\" style=\"margin-left:100px;border:2px solid white;height:20px;padding-top:-10px\"><a class=\"btn nav-link btn-dark btn-xs\" href=\"#\">Connexion / Inscription</a></li>
 {% endblock %}
          </ul>
        </div>
      </div>
    </nav>
          {% endblock %}
           {% block contenu %}
             <div class=\"container\" style=\"margin-top:40px\">
              {% block formu %}{% endblock %}
          {% block carrousel %}
   
      <div class=\"row\">

        <div class=\"col-lg-3\" >
         <div class=\"list-group\">
            {% block form %}{% endblock %}
          </div>
          <div class=\"list-group\">
            <li class=\"list-group-item\"> <img src=\"{{ asset('img/une.png')}}\" style=\"width:190px\"></li>
            <li class=\"list-group-item\"><img src=\"{{ asset('img/images4.jpeg')}}\" style=\"width:190px\"><a href=\"#\">Reserver</a></li>
            <li class=\"list-group-item\"><img src=\"{{ asset('img/images3.jpeg')}}\" style=\"width:190px\"><a href=\"#\">Reserver</a></li>
          </div>

          

        </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">

          <div class=\"my-4\" >
            
            
              <div>
                <img class=\"d-block img-fluid\" src=\"{{ asset('img/01.jpg') }}\" alt=\"First slide\">
                <div>

                </div>
              </div>
              
       
           
            
          </div>
                   

          {% endblock %}
      {% block catalogue %}
     
 {% endblock %}
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
     
</div>
     {% endblock %}

    <!-- Footer -->
    {% block footer %}
<footer class=\"py-5 bg-dark \">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Akina Group 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    {% endblock %}

    <!-- Bootstrap core JavaScript -->    

   {% endblock %} 

{% endblock %}
", "::Layout/layout.html.twig", "/var/www/html/MyJoob/app/Resources/views/Layout/layout.html.twig");
    }
}
