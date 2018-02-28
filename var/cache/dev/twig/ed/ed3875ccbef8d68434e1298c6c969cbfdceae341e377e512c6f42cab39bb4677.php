<?php

/* ::LayoutAdmin/layout.html.twig */
class __TwigTemplate_192d1618b490c2550d90abaffe10b85d77f1d2c0ba2ac08ca1fda38abc547e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::LayoutAdmin/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'Content' => array($this, 'block_Content'),
            'header' => array($this, 'block_header'),
            'connexion' => array($this, 'block_connexion'),
            'contenu' => array($this, 'block_contenu'),
            'formu' => array($this, 'block_formu'),
            'carrousel' => array($this, 'block_carrousel'),
            'biens' => array($this, 'block_biens'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e776c70946131e5e69428cf844d039e460412bfb96cec97f7623d010934f1fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e776c70946131e5e69428cf844d039e460412bfb96cec97f7623d010934f1fb8->enter($__internal_e776c70946131e5e69428cf844d039e460412bfb96cec97f7623d010934f1fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/layout.html.twig"));

        $__internal_73bad78278a2170c13cf1ac2f23ee3f513da4be68b9102bfdd03f5da87dac73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bad78278a2170c13cf1ac2f23ee3f513da4be68b9102bfdd03f5da87dac73a->enter($__internal_73bad78278a2170c13cf1ac2f23ee3f513da4be68b9102bfdd03f5da87dac73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e776c70946131e5e69428cf844d039e460412bfb96cec97f7623d010934f1fb8->leave($__internal_e776c70946131e5e69428cf844d039e460412bfb96cec97f7623d010934f1fb8_prof);

        
        $__internal_73bad78278a2170c13cf1ac2f23ee3f513da4be68b9102bfdd03f5da87dac73a->leave($__internal_73bad78278a2170c13cf1ac2f23ee3f513da4be68b9102bfdd03f5da87dac73a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03e0cb9e8625d77d9d76c5e77f5fcf3bd7158e216e95e38efd47a3b419608b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e0cb9e8625d77d9d76c5e77f5fcf3bd7158e216e95e38efd47a3b419608b0f->enter($__internal_03e0cb9e8625d77d9d76c5e77f5fcf3bd7158e216e95e38efd47a3b419608b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b759e8e77a98aedb541019b5f389ab58df624ede8582c19c6cf74f093450fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b759e8e77a98aedb541019b5f389ab58df624ede8582c19c6cf74f093450fe0->enter($__internal_1b759e8e77a98aedb541019b5f389ab58df624ede8582c19c6cf74f093450fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   
   
    ";
        // line 7
        $this->displayBlock('Content', $context, $blocks);
        // line 94
        echo " 

";
        
        $__internal_1b759e8e77a98aedb541019b5f389ab58df624ede8582c19c6cf74f093450fe0->leave($__internal_1b759e8e77a98aedb541019b5f389ab58df624ede8582c19c6cf74f093450fe0_prof);

        
        $__internal_03e0cb9e8625d77d9d76c5e77f5fcf3bd7158e216e95e38efd47a3b419608b0f->leave($__internal_03e0cb9e8625d77d9d76c5e77f5fcf3bd7158e216e95e38efd47a3b419608b0f_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_fe3d3950ffb6578d2965d1cfea55441023c496831a40f8b9d7e79ce7ae18e15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3d3950ffb6578d2965d1cfea55441023c496831a40f8b9d7e79ce7ae18e15b->enter($__internal_fe3d3950ffb6578d2965d1cfea55441023c496831a40f8b9d7e79ce7ae18e15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_de2f18ab53bbe046f13ee99d89f921b81b4aa57709033a262767fbac00d2953f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2f18ab53bbe046f13ee99d89f921b81b4aa57709033a262767fbac00d2953f->enter($__internal_de2f18ab53bbe046f13ee99d89f921b81b4aa57709033a262767fbac00d2953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 8
        echo "    
          ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "           ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 80
        echo "
    <!-- Footer -->
    ";
        // line 82
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "
    <!-- Bootstrap core JavaScript -->    

   ";
        
        $__internal_de2f18ab53bbe046f13ee99d89f921b81b4aa57709033a262767fbac00d2953f->leave($__internal_de2f18ab53bbe046f13ee99d89f921b81b4aa57709033a262767fbac00d2953f_prof);

        
        $__internal_fe3d3950ffb6578d2965d1cfea55441023c496831a40f8b9d7e79ce7ae18e15b->leave($__internal_fe3d3950ffb6578d2965d1cfea55441023c496831a40f8b9d7e79ce7ae18e15b_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_c84851ba91a194e20d098c2206b03be84f10dfd2f7b08ae3f5f2a71e95560e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84851ba91a194e20d098c2206b03be84f10dfd2f7b08ae3f5f2a71e95560e8c->enter($__internal_c84851ba91a194e20d098c2206b03be84f10dfd2f7b08ae3f5f2a71e95560e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ba9b056ab013a215ac19e9479dbc18d0e876229b7adbb41ec6ab0889fa780911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9b056ab013a215ac19e9479dbc18d0e876229b7adbb41ec6ab0889fa780911->enter($__internal_ba9b056ab013a215ac19e9479dbc18d0e876229b7adbb41ec6ab0889fa780911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "        <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" >
      <div class=\"container\">
       <div class=\"row\">
         
          <img src=\"";
        // line 15
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
        // line 38
        $this->displayBlock('connexion', $context, $blocks);
        // line 41
        echo "          </ul>
        </div>
      </div>
    </nav>
          ";
        
        $__internal_ba9b056ab013a215ac19e9479dbc18d0e876229b7adbb41ec6ab0889fa780911->leave($__internal_ba9b056ab013a215ac19e9479dbc18d0e876229b7adbb41ec6ab0889fa780911_prof);

        
        $__internal_c84851ba91a194e20d098c2206b03be84f10dfd2f7b08ae3f5f2a71e95560e8c->leave($__internal_c84851ba91a194e20d098c2206b03be84f10dfd2f7b08ae3f5f2a71e95560e8c_prof);

    }

    // line 38
    public function block_connexion($context, array $blocks = array())
    {
        $__internal_47f519be9b28fea70cf2599a18ac7142709ca7b71179864adfea17d6c90c6bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f519be9b28fea70cf2599a18ac7142709ca7b71179864adfea17d6c90c6bfd->enter($__internal_47f519be9b28fea70cf2599a18ac7142709ca7b71179864adfea17d6c90c6bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_ea24829ddb692d8b47b41f3557d691ae02b304f0419be42c470717013dcfa915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea24829ddb692d8b47b41f3557d691ae02b304f0419be42c470717013dcfa915->enter($__internal_ea24829ddb692d8b47b41f3557d691ae02b304f0419be42c470717013dcfa915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        // line 39
        echo "                                <li class=\"nav-item\" style=\"margin-left:100px;border:2px solid white;height:20px;padding-top:-10px\"><a class=\"btn nav-link btn-dark btn-xs\" href=\"#\">Compte / Deconnexion</a></li>
 ";
        
        $__internal_ea24829ddb692d8b47b41f3557d691ae02b304f0419be42c470717013dcfa915->leave($__internal_ea24829ddb692d8b47b41f3557d691ae02b304f0419be42c470717013dcfa915_prof);

        
        $__internal_47f519be9b28fea70cf2599a18ac7142709ca7b71179864adfea17d6c90c6bfd->leave($__internal_47f519be9b28fea70cf2599a18ac7142709ca7b71179864adfea17d6c90c6bfd_prof);

    }

    // line 46
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1de7889f8103bdaaeaabce2e5c1013bbe0607e307933bf898b321236522c509f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de7889f8103bdaaeaabce2e5c1013bbe0607e307933bf898b321236522c509f->enter($__internal_1de7889f8103bdaaeaabce2e5c1013bbe0607e307933bf898b321236522c509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_1c0735ee32c2fd2983ee11e1e9c5dec8c4cb632912025600f16762fd58cdd32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0735ee32c2fd2983ee11e1e9c5dec8c4cb632912025600f16762fd58cdd32a->enter($__internal_1c0735ee32c2fd2983ee11e1e9c5dec8c4cb632912025600f16762fd58cdd32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 47
        echo "             <div class=\"container\" style=\"margin-top:40px\">
              ";
        // line 48
        $this->displayBlock('formu', $context, $blocks);
        // line 49
        echo "          ";
        $this->displayBlock('carrousel', $context, $blocks);
        // line 69
        echo "      ";
        $this->displayBlock('biens', $context, $blocks);
        // line 72
        echo "        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
     
</div>
     ";
        
        $__internal_1c0735ee32c2fd2983ee11e1e9c5dec8c4cb632912025600f16762fd58cdd32a->leave($__internal_1c0735ee32c2fd2983ee11e1e9c5dec8c4cb632912025600f16762fd58cdd32a_prof);

        
        $__internal_1de7889f8103bdaaeaabce2e5c1013bbe0607e307933bf898b321236522c509f->leave($__internal_1de7889f8103bdaaeaabce2e5c1013bbe0607e307933bf898b321236522c509f_prof);

    }

    // line 48
    public function block_formu($context, array $blocks = array())
    {
        $__internal_d7ec57d293bad2cc0303c2eae5e5858d714b2a83860328967fa03d36a6e558bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ec57d293bad2cc0303c2eae5e5858d714b2a83860328967fa03d36a6e558bd->enter($__internal_d7ec57d293bad2cc0303c2eae5e5858d714b2a83860328967fa03d36a6e558bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        $__internal_84f3cf33cf44e3746f27c278a3c8ffc1d6d214cb206dbe5ccdbc421e804c6a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f3cf33cf44e3746f27c278a3c8ffc1d6d214cb206dbe5ccdbc421e804c6a06->enter($__internal_84f3cf33cf44e3746f27c278a3c8ffc1d6d214cb206dbe5ccdbc421e804c6a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        
        $__internal_84f3cf33cf44e3746f27c278a3c8ffc1d6d214cb206dbe5ccdbc421e804c6a06->leave($__internal_84f3cf33cf44e3746f27c278a3c8ffc1d6d214cb206dbe5ccdbc421e804c6a06_prof);

        
        $__internal_d7ec57d293bad2cc0303c2eae5e5858d714b2a83860328967fa03d36a6e558bd->leave($__internal_d7ec57d293bad2cc0303c2eae5e5858d714b2a83860328967fa03d36a6e558bd_prof);

    }

    // line 49
    public function block_carrousel($context, array $blocks = array())
    {
        $__internal_b73de0c2344a9b50f96fa38c2003be746a1d7894598223e0eaaa0d3de8584c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73de0c2344a9b50f96fa38c2003be746a1d7894598223e0eaaa0d3de8584c80->enter($__internal_b73de0c2344a9b50f96fa38c2003be746a1d7894598223e0eaaa0d3de8584c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrousel"));

        $__internal_798e7d0653238816064ac8e571fdeae7a28a77af2cc6a4c88343065570dcc538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798e7d0653238816064ac8e571fdeae7a28a77af2cc6a4c88343065570dcc538->enter($__internal_798e7d0653238816064ac8e571fdeae7a28a77af2cc6a4c88343065570dcc538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrousel"));

        // line 50
        echo "   
      <div class=\"row\">

        <div class=\"col-lg-3\" >
         <div class=\"list-group\">
            <li class=\"list-group-item\"> <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ret.png"), "html", null, true);
        echo "\" style=\"width:190px\"></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Res");
        echo "\">Les propriétaires<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Res");
        echo "\">Les biens<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
                        <li class=\"list-group-item\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("poni");
        echo "\">Les reservations<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
                                    <li class=\"list-group-item\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponi");
        echo "\">Les contrats<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
<li class=\"list-group-item\"><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponi");
        echo "\">Nouveaux<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>


          </div>
          </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">
        ";
        
        $__internal_798e7d0653238816064ac8e571fdeae7a28a77af2cc6a4c88343065570dcc538->leave($__internal_798e7d0653238816064ac8e571fdeae7a28a77af2cc6a4c88343065570dcc538_prof);

        
        $__internal_b73de0c2344a9b50f96fa38c2003be746a1d7894598223e0eaaa0d3de8584c80->leave($__internal_b73de0c2344a9b50f96fa38c2003be746a1d7894598223e0eaaa0d3de8584c80_prof);

    }

    // line 69
    public function block_biens($context, array $blocks = array())
    {
        $__internal_7d66ed40377d01006468bcc57a429f0c47e36ee571bb9e17b4a5adbc63fce53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d66ed40377d01006468bcc57a429f0c47e36ee571bb9e17b4a5adbc63fce53f->enter($__internal_7d66ed40377d01006468bcc57a429f0c47e36ee571bb9e17b4a5adbc63fce53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_e4a21c7410ef7be58dfa3eca8ccd5719797c4ecdbcdc2c4104c941fe1b568f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a21c7410ef7be58dfa3eca8ccd5719797c4ecdbcdc2c4104c941fe1b568f58->enter($__internal_e4a21c7410ef7be58dfa3eca8ccd5719797c4ecdbcdc2c4104c941fe1b568f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 70
        echo "     
 ";
        
        $__internal_e4a21c7410ef7be58dfa3eca8ccd5719797c4ecdbcdc2c4104c941fe1b568f58->leave($__internal_e4a21c7410ef7be58dfa3eca8ccd5719797c4ecdbcdc2c4104c941fe1b568f58_prof);

        
        $__internal_7d66ed40377d01006468bcc57a429f0c47e36ee571bb9e17b4a5adbc63fce53f->leave($__internal_7d66ed40377d01006468bcc57a429f0c47e36ee571bb9e17b4a5adbc63fce53f_prof);

    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5c59651a8cf2fbfbe13f085d7d8ee42419a01d8d8a4fa4e9c7c8fb121073762d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c59651a8cf2fbfbe13f085d7d8ee42419a01d8d8a4fa4e9c7c8fb121073762d->enter($__internal_5c59651a8cf2fbfbe13f085d7d8ee42419a01d8d8a4fa4e9c7c8fb121073762d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9c4bc98b350d52153f8dddd0acd0699df556601eab8928f324454b3721f8021f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4bc98b350d52153f8dddd0acd0699df556601eab8928f324454b3721f8021f->enter($__internal_9c4bc98b350d52153f8dddd0acd0699df556601eab8928f324454b3721f8021f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 83
        echo "<footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Akina Group 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    ";
        
        $__internal_9c4bc98b350d52153f8dddd0acd0699df556601eab8928f324454b3721f8021f->leave($__internal_9c4bc98b350d52153f8dddd0acd0699df556601eab8928f324454b3721f8021f_prof);

        
        $__internal_5c59651a8cf2fbfbe13f085d7d8ee42419a01d8d8a4fa4e9c7c8fb121073762d->leave($__internal_5c59651a8cf2fbfbe13f085d7d8ee42419a01d8d8a4fa4e9c7c8fb121073762d_prof);

    }

    public function getTemplateName()
    {
        return "::LayoutAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 83,  319 => 82,  308 => 70,  299 => 69,  280 => 60,  276 => 59,  272 => 58,  268 => 57,  264 => 56,  260 => 55,  253 => 50,  244 => 49,  227 => 48,  210 => 72,  207 => 69,  204 => 49,  202 => 48,  199 => 47,  190 => 46,  179 => 39,  170 => 38,  156 => 41,  154 => 38,  128 => 15,  121 => 10,  112 => 9,  99 => 91,  97 => 82,  93 => 80,  90 => 46,  88 => 9,  85 => 8,  76 => 7,  64 => 94,  62 => 7,  57 => 4,  48 => 3,  11 => 1,);
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
                                <li class=\"nav-item\" style=\"margin-left:100px;border:2px solid white;height:20px;padding-top:-10px\"><a class=\"btn nav-link btn-dark btn-xs\" href=\"#\">Compte / Deconnexion</a></li>
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
            <li class=\"list-group-item\"> <img src=\"{{ asset('img/ret.png')}}\" style=\"width:190px\"></li>
            <li class=\"list-group-item\"><a href=\"{{path('Res')}}\">Les propriétaires<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
            <li class=\"list-group-item\"><a href=\"{{path('Res')}}\">Les biens<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
                        <li class=\"list-group-item\"><a href=\"{{path('poni')}}\">Les reservations<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
                                    <li class=\"list-group-item\"><a href=\"{{path('disponi')}}\">Les contrats<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
<li class=\"list-group-item\"><a href=\"{{path('disponi')}}\">Nouveaux<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>


          </div>
          </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">
        {% endblock %}
      {% block biens %}
     
 {% endblock %}
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
     
</div>
     {% endblock %}

    <!-- Footer -->
    {% block footer %}
<footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Akina Group 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    {% endblock %}

    <!-- Bootstrap core JavaScript -->    

   {% endblock %} 

{% endblock %}
", "::LayoutAdmin/layout.html.twig", "/var/www/html/MyJoob/app/Resources/views/LayoutAdmin/layout.html.twig");
    }
}
