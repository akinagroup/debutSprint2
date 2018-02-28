<?php

/* AkinaImmobilierBundle:Admin:paiement.html.twig */
class __TwigTemplate_952a860772efdac2f7c84f17b46a59c10c672e890e4fcc6c6ad720ece3ec8752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/layout.html.twig", "AkinaImmobilierBundle:Admin:paiement.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'biens' => array($this, 'block_biens'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a51b3fbca32f4015696a7e00ba5c4d0d4a2f0ba1c76a9c18c03d9530adf4d215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51b3fbca32f4015696a7e00ba5c4d0d4a2f0ba1c76a9c18c03d9530adf4d215->enter($__internal_a51b3fbca32f4015696a7e00ba5c4d0d4a2f0ba1c76a9c18c03d9530adf4d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:paiement.html.twig"));

        $__internal_588f80ec3ee8f39ac9939bbcfba3e17f8b4f69078811ee3f30565a5a3c9112f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588f80ec3ee8f39ac9939bbcfba3e17f8b4f69078811ee3f30565a5a3c9112f4->enter($__internal_588f80ec3ee8f39ac9939bbcfba3e17f8b4f69078811ee3f30565a5a3c9112f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a51b3fbca32f4015696a7e00ba5c4d0d4a2f0ba1c76a9c18c03d9530adf4d215->leave($__internal_a51b3fbca32f4015696a7e00ba5c4d0d4a2f0ba1c76a9c18c03d9530adf4d215_prof);

        
        $__internal_588f80ec3ee8f39ac9939bbcfba3e17f8b4f69078811ee3f30565a5a3c9112f4->leave($__internal_588f80ec3ee8f39ac9939bbcfba3e17f8b4f69078811ee3f30565a5a3c9112f4_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_c23a4cbce33b7b137e5655208e020febb3631b3002ed83785097339e9dc6f5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23a4cbce33b7b137e5655208e020febb3631b3002ed83785097339e9dc6f5b9->enter($__internal_c23a4cbce33b7b137e5655208e020febb3631b3002ed83785097339e9dc6f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_10448d74e3217212a37a3752f0bb29a1f5b6404d4cc6c62846da348276508243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10448d74e3217212a37a3752f0bb29a1f5b6404d4cc6c62846da348276508243->enter($__internal_10448d74e3217212a37a3752f0bb29a1f5b6404d4cc6c62846da348276508243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo " 
 <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  ";
        
        $__internal_10448d74e3217212a37a3752f0bb29a1f5b6404d4cc6c62846da348276508243->leave($__internal_10448d74e3217212a37a3752f0bb29a1f5b6404d4cc6c62846da348276508243_prof);

        
        $__internal_c23a4cbce33b7b137e5655208e020febb3631b3002ed83785097339e9dc6f5b9->leave($__internal_c23a4cbce33b7b137e5655208e020febb3631b3002ed83785097339e9dc6f5b9_prof);

    }

    // line 10
    public function block_biens($context, array $blocks = array())
    {
        $__internal_d4e63f316be78313d483dbbdff94ddc7757ce8b9abddb3b3a90c2065db7d39b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e63f316be78313d483dbbdff94ddc7757ce8b9abddb3b3a90c2065db7d39b4->enter($__internal_d4e63f316be78313d483dbbdff94ddc7757ce8b9abddb3b3a90c2065db7d39b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_d05126f0260e7b4e390100cc6b695209d7309316a8c4060617e45110f803964f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05126f0260e7b4e390100cc6b695209d7309316a8c4060617e45110f803964f->enter($__internal_d05126f0260e7b4e390100cc6b695209d7309316a8c4060617e45110f803964f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 11
        echo "<!-- Responsive extension -->

        <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
\t\t\t  integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
\t\t\t  crossorigin=\"anonymous\"></script>
  
 
<h3>
Liste des reservations
</h3>
 <div class=\"container\">

  
 <div class=\"table-responsive \" id=\"example\"> 
<table class=\"table datatable table-bordred table-striped table-inverse display\" >
<thead>
<tr>
    <th>N° </th>
<th >Nom du client</th>
<th>Montant total payer</th>

<th>Durée</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 42
            echo "<tr>
<td>


</td>

<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Reservation", array()), "client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Reservation", array()), "client", array()), "Nom", array()), "html", null, true);
            echo "</td>

<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "montantPayer", array()), "html", null, true);
            echo "</td>
<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "duree", array()), "html", null, true);
            echo "</td>

<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Reservation", array()), "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Reservation", array()), "Bien", array()), "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Reservation", array()), "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Reservation", array()), "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "</td>
<td><a href=\"#\" >Détails</a></td>
<td></td>
</tr>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "<td colspan=\"6\">Aucun utilisateur</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</tbody>
</table>
</div>

</div>
 

";
        
        $__internal_d05126f0260e7b4e390100cc6b695209d7309316a8c4060617e45110f803964f->leave($__internal_d05126f0260e7b4e390100cc6b695209d7309316a8c4060617e45110f803964f_prof);

        
        $__internal_d4e63f316be78313d483dbbdff94ddc7757ce8b9abddb3b3a90c2065db7d39b4->leave($__internal_d4e63f316be78313d483dbbdff94ddc7757ce8b9abddb3b3a90c2065db7d39b4_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  158 => 62,  145 => 56,  140 => 54,  136 => 53,  131 => 51,  127 => 50,  120 => 48,  112 => 42,  107 => 41,  75 => 11,  66 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
 {% block form %}
 
 <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  {% endblock %}
{% block biens %}
<!-- Responsive extension -->

        <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
\t\t\t  integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
\t\t\t  crossorigin=\"anonymous\"></script>
  
 
<h3>
Liste des reservations
</h3>
 <div class=\"container\">

  
 <div class=\"table-responsive \" id=\"example\"> 
<table class=\"table datatable table-bordred table-striped table-inverse display\" >
<thead>
<tr>
    <th>N° </th>
<th >Nom du client</th>
<th>Montant total payer</th>

<th>Durée</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
{%for reserve in reservations%}
<tr>
<td>


</td>

<td>{{reserve.Contrat.Reservation.client.Prenom}} {{reserve.Contrat.Reservation.client.Nom}}</td>

<td>{{reserve.montantPayer}}</td>
<td>{{reserve.duree}}</td>

<td>{{reserve.Contrat.Reservation.Bien.nomBien }}</td>
<td>{{reserve.Contrat.Reservation.Bien.Localite.Libelle}}</td>

<td>{{reserve.Contrat.Reservation.Bien.Proprietaire.Prenom}} {{reserve.Contrat.Reservation.Bien.Proprietaire.Nom}}</td>
<td><a href=\"#\" >Détails</a></td>
<td></td>
</tr>

{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</tbody>
</table>
</div>

</div>
 

{% endblock %}", "AkinaImmobilierBundle:Admin:paiement.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/paiement.html.twig");
    }
}
