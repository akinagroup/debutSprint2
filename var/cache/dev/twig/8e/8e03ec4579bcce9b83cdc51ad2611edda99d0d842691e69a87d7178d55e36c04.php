<?php

/* AkinaImmobilierBundle:Admin:Detail.html.twig */
class __TwigTemplate_689f37cba115265260178d1e7c4fce4afa624607e8d230fd08f9180f9994e8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/layout.html.twig", "AkinaImmobilierBundle:Admin:Detail.html.twig", 1);
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
        $__internal_2445f8936c364ea7966ca4674ed07d01065d6e554c8ea6b676f5cbaa95a5fa30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2445f8936c364ea7966ca4674ed07d01065d6e554c8ea6b676f5cbaa95a5fa30->enter($__internal_2445f8936c364ea7966ca4674ed07d01065d6e554c8ea6b676f5cbaa95a5fa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:Detail.html.twig"));

        $__internal_4a2a16173954a1f43e75d115524d0fec29eec9c3a2d1b3fffbb192210db166ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2a16173954a1f43e75d115524d0fec29eec9c3a2d1b3fffbb192210db166ee->enter($__internal_4a2a16173954a1f43e75d115524d0fec29eec9c3a2d1b3fffbb192210db166ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:Detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2445f8936c364ea7966ca4674ed07d01065d6e554c8ea6b676f5cbaa95a5fa30->leave($__internal_2445f8936c364ea7966ca4674ed07d01065d6e554c8ea6b676f5cbaa95a5fa30_prof);

        
        $__internal_4a2a16173954a1f43e75d115524d0fec29eec9c3a2d1b3fffbb192210db166ee->leave($__internal_4a2a16173954a1f43e75d115524d0fec29eec9c3a2d1b3fffbb192210db166ee_prof);

    }

    // line 4
    public function block_biens($context, array $blocks = array())
    {
        $__internal_a0de95759f5befc81e5c52967761d004570f7c18601cc4c0855af015e15c29fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0de95759f5befc81e5c52967761d004570f7c18601cc4c0855af015e15c29fc->enter($__internal_a0de95759f5befc81e5c52967761d004570f7c18601cc4c0855af015e15c29fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_baa19da50ef7af5e3f36dc010157d3b74425b61f26a5467ecc3cf70a20f2784a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa19da50ef7af5e3f36dc010157d3b74425b61f26a5467ecc3cf70a20f2784a->enter($__internal_baa19da50ef7af5e3f36dc010157d3b74425b61f26a5467ecc3cf70a20f2784a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 5
        echo "
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  
  <style>

.tabu {

    border-radius:3px;
 
    height:400px;
    
 
}
span{
   
    
}

</style>
<h3>
Voir les détails sur :
</h3>
<div class=\"container tabu\">
<div id=\"tabs\">
  <ul>
    <li class=\"tabI\"><a href=\"#tabs-1\">Le bien</a></li>
    <li class=\"tabI\"><a href=\"#tabs-2\">Le propriétaire</a></li>
    <li class=\"tabI\"><a href=\"#tabs-3\">Le client</a></li>
    <li class=\"tabI\"><a href=\"#tabs-4\">La réservation</a></li>
  </ul>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? $this->getContext($context, "detail")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 37
            echo "  <div id=\"tabs-1\">
  <table class=\"table table-bordred table-striped table-inverse display\">
  
    <tr><td><strong>Nom du bien    </strong></td><td><span>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "        </span>     </td></tr>
    <tr><td><strong>Description    </strong></td><td><span>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "description", array()), "html", null, true);
            echo "        </span> </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "              </span>  </td></tr>
              
   <tr><td><strong>Localite        </strong></td><td><span>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo " </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "     </span>   </td></tr>
 
  </table>
  </div>
  <div id=\"tabs-2\">
  <table class=\"table table-bordred table-striped table-inverse display\">
  <tr><td><strong>Nom du propriétaire</strong></td><td><span>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "     </span>    </td></tr>
    <tr><td><strong>Numéro CNI       </strong></td><td><span>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo " </span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Addresse", array()), "html", null, true);
            echo "   </span>    </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "email", array()), "html", null, true);
            echo "   </span></td></tr>
    </table>
  </div>
  <div id=\"tabs-3\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td><span>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Nom", array()), "html", null, true);
            echo "</span>  </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td><span>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "numeroPiece", array()), "html", null, true);
            echo "</span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Addresse", array()), "html", null, true);
            echo "    </span>  </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "email", array()), "html", null, true);
            echo "   </span></td></tr>
       <tr><td><strong>Téléphone         </strong></td><td><span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "telephone", array()), "html", null, true);
            echo "   </span></td></tr>
</table>
  </div>
  <div id=\"tabs-4\">
    <p>Date de reservation:             </p>
    <p>nombre de categorie:       </p>
  </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo " 
  </div>
</div>

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
";
        
        $__internal_baa19da50ef7af5e3f36dc010157d3b74425b61f26a5467ecc3cf70a20f2784a->leave($__internal_baa19da50ef7af5e3f36dc010157d3b74425b61f26a5467ecc3cf70a20f2784a_prof);

        
        $__internal_a0de95759f5befc81e5c52967761d004570f7c18601cc4c0855af015e15c29fc->leave($__internal_a0de95759f5befc81e5c52967761d004570f7c18601cc4c0855af015e15c29fc_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:Detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 71,  157 => 63,  153 => 62,  149 => 61,  145 => 60,  139 => 59,  131 => 54,  127 => 53,  123 => 52,  117 => 51,  108 => 45,  104 => 44,  99 => 42,  95 => 41,  91 => 40,  86 => 37,  82 => 36,  49 => 5,  40 => 4,  11 => 1,);
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

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  
  <style>

.tabu {

    border-radius:3px;
 
    height:400px;
    
 
}
span{
   
    
}

</style>
<h3>
Voir les détails sur :
</h3>
<div class=\"container tabu\">
<div id=\"tabs\">
  <ul>
    <li class=\"tabI\"><a href=\"#tabs-1\">Le bien</a></li>
    <li class=\"tabI\"><a href=\"#tabs-2\">Le propriétaire</a></li>
    <li class=\"tabI\"><a href=\"#tabs-3\">Le client</a></li>
    <li class=\"tabI\"><a href=\"#tabs-4\">La réservation</a></li>
  </ul>
    {%for reserve in detail%}
  <div id=\"tabs-1\">
  <table class=\"table table-bordred table-striped table-inverse display\">
  
    <tr><td><strong>Nom du bien    </strong></td><td><span>{{reserve.Bien.nomBien }}        </span>     </td></tr>
    <tr><td><strong>Description    </strong></td><td><span>{{reserve.Bien.description }}        </span> </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>{{reserve.Bien.prix }}              </span>  </td></tr>
              
   <tr><td><strong>Localite        </strong></td><td><span>{{reserve.Bien.Localite.libelle }} </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> {{reserve.Bien.Type.libelle }}     </span>   </td></tr>
 
  </table>
  </div>
  <div id=\"tabs-2\">
  <table class=\"table table-bordred table-striped table-inverse display\">
  <tr><td><strong>Nom du propriétaire</strong></td><td><span>{{reserve.Bien.Proprietaire.Prenom}} {{reserve.Bien.Proprietaire.Nom}}     </span>    </td></tr>
    <tr><td><strong>Numéro CNI       </strong></td><td><span>{{reserve.Bien.Proprietaire.numeroPiece}} </span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>{{reserve.Bien.Proprietaire.Addresse}}   </span>    </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>{{reserve.Bien.Proprietaire.email}}   </span></td></tr>
    </table>
  </div>
  <div id=\"tabs-3\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td><span>{{reserve.Client.Prenom}} {{reserve.Client.Nom}}</span>  </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td><span>{{reserve.Client.numeroPiece}}</span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>{{reserve.Client.Addresse}}    </span>  </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>{{reserve.Client.email}}   </span></td></tr>
       <tr><td><strong>Téléphone         </strong></td><td><span>{{reserve.Client.telephone}}   </span></td></tr>
</table>
  </div>
  <div id=\"tabs-4\">
    <p>Date de reservation:             </p>
    <p>nombre de categorie:       </p>
  </div>
 {%endfor%}
 
  </div>
</div>

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
{% endblock %}", "AkinaImmobilierBundle:Admin:Detail.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/Detail.html.twig");
    }
}
