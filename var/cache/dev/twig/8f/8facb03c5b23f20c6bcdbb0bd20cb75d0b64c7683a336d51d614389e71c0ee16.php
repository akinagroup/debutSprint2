<?php

/* AkinaImmobilierBundle:Admin:list.html.twig */
class __TwigTemplate_b1ab011d5d7930d326ceca0c2e8ff5645d20990c45f6f54f5f7053879eb1b624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/layout.html.twig", "AkinaImmobilierBundle:Admin:list.html.twig", 1);
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
        $__internal_1c2c034d29eb51e805a3bd2ea20c9d3a815e4c3b5c9adc26aa6a25bd5c23439e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2c034d29eb51e805a3bd2ea20c9d3a815e4c3b5c9adc26aa6a25bd5c23439e->enter($__internal_1c2c034d29eb51e805a3bd2ea20c9d3a815e4c3b5c9adc26aa6a25bd5c23439e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:list.html.twig"));

        $__internal_f4c5a8927e8eee95aa2f294dccd14ca1c099c35798360faaf506569c87e12c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c5a8927e8eee95aa2f294dccd14ca1c099c35798360faaf506569c87e12c75->enter($__internal_f4c5a8927e8eee95aa2f294dccd14ca1c099c35798360faaf506569c87e12c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c2c034d29eb51e805a3bd2ea20c9d3a815e4c3b5c9adc26aa6a25bd5c23439e->leave($__internal_1c2c034d29eb51e805a3bd2ea20c9d3a815e4c3b5c9adc26aa6a25bd5c23439e_prof);

        
        $__internal_f4c5a8927e8eee95aa2f294dccd14ca1c099c35798360faaf506569c87e12c75->leave($__internal_f4c5a8927e8eee95aa2f294dccd14ca1c099c35798360faaf506569c87e12c75_prof);

    }

    // line 4
    public function block_biens($context, array $blocks = array())
    {
        $__internal_673e64a659e8faf9640a2c19bab3aa6561b03bce1f30d0aca9ad3d6fa6de19c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673e64a659e8faf9640a2c19bab3aa6561b03bce1f30d0aca9ad3d6fa6de19c4->enter($__internal_673e64a659e8faf9640a2c19bab3aa6561b03bce1f30d0aca9ad3d6fa6de19c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_3bc7891e02fc08be9a4470feac79a50277ef09808aadb95f22a968e3dcfb83fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc7891e02fc08be9a4470feac79a50277ef09808aadb95f22a968e3dcfb83fa->enter($__internal_3bc7891e02fc08be9a4470feac79a50277ef09808aadb95f22a968e3dcfb83fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 5
        echo "
<h3>
Liste des biens
</h3>
 <div class=\"container\">

  
 <div class=\"table-responsive \"> 
<table class=\"table table-bordred table-striped table-inverse display\" id=\"myTable\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Etat</th>

<th>Description</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 29
            echo "<tr>
<td>

</td>

<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponibilite", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">
";
            // line 36
            if (($this->getAttribute($context["bien"], "etat", array()) == 1)) {
                // line 37
                echo "Occupé
";
            } else {
                // line 39
                echo "Disponible
";
            }
            // line 41
            echo "</a></td>
<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>


<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Type", array()), "libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailBien", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">Détails</a></td>
<td></td>
</tr>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "<td colspan=\"6\">Aucun utilisateur</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</tbody>
</table>
</div>

</div>
 

";
        
        $__internal_3bc7891e02fc08be9a4470feac79a50277ef09808aadb95f22a968e3dcfb83fa->leave($__internal_3bc7891e02fc08be9a4470feac79a50277ef09808aadb95f22a968e3dcfb83fa_prof);

        
        $__internal_673e64a659e8faf9640a2c19bab3aa6561b03bce1f30d0aca9ad3d6fa6de19c4->leave($__internal_673e64a659e8faf9640a2c19bab3aa6561b03bce1f30d0aca9ad3d6fa6de19c4_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 57,  136 => 54,  126 => 49,  122 => 48,  117 => 46,  113 => 45,  107 => 42,  104 => 41,  100 => 39,  96 => 37,  94 => 36,  90 => 35,  86 => 34,  79 => 29,  74 => 28,  49 => 5,  40 => 4,  11 => 1,);
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

<h3>
Liste des biens
</h3>
 <div class=\"container\">

  
 <div class=\"table-responsive \"> 
<table class=\"table table-bordred table-striped table-inverse display\" id=\"myTable\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Etat</th>

<th>Description</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
{%for bien in reservations%}
<tr>
<td>

</td>

<td>{{bien.nomBien}}</td>
<td><a href=\"{{path('disponibilite',{'id':bien.id})}}\">
{%if bien.etat == 1%}
Occupé
{% else %}
Disponible
{% endif%}
</a></td>
<td>{{bien.description}}</td>


<td>{{bien.Localite.libelle }}</td>
<td>{{bien.Type.libelle}}</td>

<td>{{bien.Proprietaire.numeroPiece}}</td>
<td><a href=\"{{path('detailBien',{'id':bien.id})}}\">Détails</a></td>
<td></td>
</tr>

{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</tbody>
</table>
</div>

</div>
 

{% endblock %}", "AkinaImmobilierBundle:Admin:list.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/list.html.twig");
    }
}
