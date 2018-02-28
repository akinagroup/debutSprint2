<?php

/* AkinaImmobilierBundle:Admin:contrat.html.twig */
class __TwigTemplate_aa3232cbcd7356f54886365e3a360315f826603f8ec55e4fbd8889a5bacfc708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/layout.html.twig", "AkinaImmobilierBundle:Admin:contrat.html.twig", 1);
        $this->blocks = array(
            'biens' => array($this, 'block_biens'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d675a152a571b87ba6e6b044a4728dbf943f2c53ec38d2fba23b9b99495f12ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d675a152a571b87ba6e6b044a4728dbf943f2c53ec38d2fba23b9b99495f12ef->enter($__internal_d675a152a571b87ba6e6b044a4728dbf943f2c53ec38d2fba23b9b99495f12ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:contrat.html.twig"));

        $__internal_0f027b441411a04c29ac35640a5845381d55f1fa0c9f43d839cfc185c0b2eda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f027b441411a04c29ac35640a5845381d55f1fa0c9f43d839cfc185c0b2eda5->enter($__internal_0f027b441411a04c29ac35640a5845381d55f1fa0c9f43d839cfc185c0b2eda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d675a152a571b87ba6e6b044a4728dbf943f2c53ec38d2fba23b9b99495f12ef->leave($__internal_d675a152a571b87ba6e6b044a4728dbf943f2c53ec38d2fba23b9b99495f12ef_prof);

        
        $__internal_0f027b441411a04c29ac35640a5845381d55f1fa0c9f43d839cfc185c0b2eda5->leave($__internal_0f027b441411a04c29ac35640a5845381d55f1fa0c9f43d839cfc185c0b2eda5_prof);

    }

    // line 2
    public function block_biens($context, array $blocks = array())
    {
        $__internal_0036958ac108603d32e8f5cdbedddcd00a99dee8217903ab63e33017aeb8e31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0036958ac108603d32e8f5cdbedddcd00a99dee8217903ab63e33017aeb8e31c->enter($__internal_0036958ac108603d32e8f5cdbedddcd00a99dee8217903ab63e33017aeb8e31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_6f7f097beb92fec3e51f1f7369a9cce3883fd0d6c1d5909268210f320b193b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7f097beb92fec3e51f1f7369a9cce3883fd0d6c1d5909268210f320b193b2b->enter($__internal_6f7f097beb92fec3e51f1f7369a9cce3883fd0d6c1d5909268210f320b193b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 3
        echo "  <style>
  .btn{
      float:right;
  }
  </style>
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Contrat</h1>

<h2>Infos client</h2>
 ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservation"] ?? $this->getContext($context, "reservation")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 14
            echo "            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td><input type=\"text\" class=\"form-control\"   aria-describedby=\"emailHelp\" placeholder=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Nom", array()), "html", null, true);
            echo "\" disabled=\"disabled\"
> </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "numeroPiece", array()), "html", null, true);
            echo "\" disabled=\"disabled\"
> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Addresse", array()), "html", null, true);
            echo " \" disabled=\"disabled\"
> </td></tr>
    <tr><td><strong>Email            </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "email", array()), "html", null, true);
            echo "\" disabled=\"disabled\"
> </td></tr>
       <tr><td><strong>Téléphone         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "telephone", array()), "html", null, true);
            echo " \" disabled=\"disabled\"
> </td></tr>
 
  </div>
 <tr><td> <h2>Infos du bien</h2></td></tr>
 <div class=\"form-group\">
    <tr><td><strong>Nom du bien    </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo " \" disabled=\"disabled\"
> </td></tr>
  
    <tr><td><strong>Prix        </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "  \" disabled=\"disabled\"
> </td></tr>
    <tr><td><strong>Proprietaire           </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "\" disabled=\"disabled\"
> </td></tr>
       <tr><td><strong>Localite         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "\" disabled=\"disabled\"
> </td></tr>
<tr><td><strong>Type         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo " \" disabled=\"disabled\"
> </td></tr>


    
  </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "   
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo " 
          <tr><td> ";
        // line 49
        echo "<strong>        
    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mensualite", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "La mensualité"));
        echo "


    ";
        // line 54
        echo "
    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mensualite", array()), 'errors');
        echo "
</strong>
            </td> <td>

    

   

      ";
        // line 64
        echo "
      ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mensualite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "



 </td></tr>
  <tr><td> ";
        // line 71
        echo "<strong>        
    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "caution", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "La caution"));
        echo "


    ";
        // line 76
        echo "
    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "caution", array()), 'errors');
        echo "
</strong>
            </td> <td>

    

   

      ";
        // line 86
        echo "
      ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "caution", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "



</td></tr>
           <tr><td> ";
        // line 93
        echo "<strong>   
   
    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Terme", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Les termes du contrat"));
        echo "


    ";
        // line 99
        echo "
    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Terme", array()), 'errors');
        echo "
</strong>
            </td> <td>

    

   

      ";
        // line 109
        echo " 


      ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Terme", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "disabled")));
        // line 113
        echo "



  </div>
  <input id=\"checkBox\" name=\"checkBox\" type=\"radio\">Accepter
  <input id=\"checkBox\" name=\"checkBox\" type=\"radio\" style=\"margin-left:20px;\">Refuser
  </td></tr>
            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" value=\"Enregistrer\" /> 
        </td></tr>
        ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
       
        </table>
        </div>

  ";
        
        $__internal_6f7f097beb92fec3e51f1f7369a9cce3883fd0d6c1d5909268210f320b193b2b->leave($__internal_6f7f097beb92fec3e51f1f7369a9cce3883fd0d6c1d5909268210f320b193b2b_prof);

        
        $__internal_0036958ac108603d32e8f5cdbedddcd00a99dee8217903ab63e33017aeb8e31c->leave($__internal_0036958ac108603d32e8f5cdbedddcd00a99dee8217903ab63e33017aeb8e31c_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 124,  242 => 113,  240 => 112,  235 => 109,  224 => 100,  221 => 99,  215 => 95,  211 => 93,  203 => 87,  200 => 86,  189 => 77,  186 => 76,  180 => 72,  177 => 71,  169 => 65,  166 => 64,  155 => 55,  152 => 54,  146 => 50,  143 => 49,  139 => 47,  136 => 46,  123 => 39,  118 => 37,  111 => 35,  106 => 33,  100 => 30,  91 => 24,  86 => 22,  81 => 20,  76 => 18,  69 => 16,  65 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::LayoutAdmin/layout.html.twig\" %}
  {% block biens %}
  <style>
  .btn{
      float:right;
  }
  </style>
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Contrat</h1>

<h2>Infos client</h2>
 {%for reserve in reservation%}
            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td><input type=\"text\" class=\"form-control\"   aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Client.Prenom}} {{reserve.Client.Nom}}\" disabled=\"disabled\"
> </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Client.numeroPiece}}\" disabled=\"disabled\"
> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Client.Addresse}} \" disabled=\"disabled\"
> </td></tr>
    <tr><td><strong>Email            </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Client.email}}\" disabled=\"disabled\"
> </td></tr>
       <tr><td><strong>Téléphone         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Client.telephone}} \" disabled=\"disabled\"
> </td></tr>
 
  </div>
 <tr><td> <h2>Infos du bien</h2></td></tr>
 <div class=\"form-group\">
    <tr><td><strong>Nom du bien    </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Bien.nomBien }} \" disabled=\"disabled\"
> </td></tr>
  
    <tr><td><strong>Prix        </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Bien.prix }}  \" disabled=\"disabled\"
> </td></tr>
    <tr><td><strong>Proprietaire           </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Bien.Proprietaire.Prenom}} {{reserve.Bien.Proprietaire.Nom}}\" disabled=\"disabled\"
> </td></tr>
       <tr><td><strong>Localite         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Bien.Localite.libelle }}\" disabled=\"disabled\"
> </td></tr>
<tr><td><strong>Type         </strong></td><td><input type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"{{reserve.Bien.Type.libelle }} \" disabled=\"disabled\"
> </td></tr>


    
  </div>
   {%endfor%}
   
{{form_start(form)}} 
          <tr><td> {# Génération du label. #}
<strong>        
    {{ form_label(form.mensualite, \"La mensualité\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {# Affichage des erreurs pour ce champ précis. #}

    {{ form_errors(form.mensualite) }}
</strong>
            </td> <td>

    

   

      {# Génération de l'input. #}

      {{ form_widget(form.mensualite, {'attr': {'class': 'form-control'}}) }}



 </td></tr>
  <tr><td> {# Génération du label. #}
<strong>        
    {{ form_label(form.caution, \"La caution\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {# Affichage des erreurs pour ce champ précis. #}

    {{ form_errors(form.caution) }}
</strong>
            </td> <td>

    

   

      {# Génération de l'input. #}

      {{ form_widget(form.caution, {'attr': {'class': 'form-control'}}) }}



</td></tr>
           <tr><td> {# Génération du label. #}
<strong>   
   
    {{ form_label(form.Terme, \"Les termes du contrat\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {# Affichage des erreurs pour ce champ précis. #}

    {{ form_errors(form.Terme) }}
</strong>
            </td> <td>

    

   

      {# Génération de l'input. #}
 


      {{ form_widget(form.Terme, {'attr': {'class': 'form-control','disabled': 'disabled'
      }}) }}



  </div>
  <input id=\"checkBox\" name=\"checkBox\" type=\"radio\">Accepter
  <input id=\"checkBox\" name=\"checkBox\" type=\"radio\" style=\"margin-left:20px;\">Refuser
  </td></tr>
            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" value=\"Enregistrer\" /> 
        </td></tr>
        {{form_end(form)}}
       
        </table>
        </div>

  {% endblock %}", "AkinaImmobilierBundle:Admin:contrat.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/contrat.html.twig");
    }
}
