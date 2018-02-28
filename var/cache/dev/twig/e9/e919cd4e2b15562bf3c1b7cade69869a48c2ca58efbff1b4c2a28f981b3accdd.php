<?php

/* AkinaImmobilierBundle:Admin:listRes.html.twig */
class __TwigTemplate_563e8b73d604a131ce3dbd24e7b98f12bc89ebfc3e3b8dff73f6675f1915933c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/layout.html.twig", "AkinaImmobilierBundle:Admin:listRes.html.twig", 1);
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
        $__internal_02b0a064ac64457807d5dabcc18d73383a9448715d2737145510607b0a44b4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b0a064ac64457807d5dabcc18d73383a9448715d2737145510607b0a44b4c7->enter($__internal_02b0a064ac64457807d5dabcc18d73383a9448715d2737145510607b0a44b4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:listRes.html.twig"));

        $__internal_e0846f52936db563988b84265b81eb942f860c2ea984b4d3db2438b612d01b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0846f52936db563988b84265b81eb942f860c2ea984b4d3db2438b612d01b6d->enter($__internal_e0846f52936db563988b84265b81eb942f860c2ea984b4d3db2438b612d01b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:listRes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b0a064ac64457807d5dabcc18d73383a9448715d2737145510607b0a44b4c7->leave($__internal_02b0a064ac64457807d5dabcc18d73383a9448715d2737145510607b0a44b4c7_prof);

        
        $__internal_e0846f52936db563988b84265b81eb942f860c2ea984b4d3db2438b612d01b6d->leave($__internal_e0846f52936db563988b84265b81eb942f860c2ea984b4d3db2438b612d01b6d_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_aee8a2015464fbb88ea5f26b70babd0020bb2918c0a5eb9957678c59ede220d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee8a2015464fbb88ea5f26b70babd0020bb2918c0a5eb9957678c59ede220d5->enter($__internal_aee8a2015464fbb88ea5f26b70babd0020bb2918c0a5eb9957678c59ede220d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_1d6908b90e0f4cfa7b9511d89156b4c5f3a18e686998e18888b94a0d0c607277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6908b90e0f4cfa7b9511d89156b4c5f3a18e686998e18888b94a0d0c607277->enter($__internal_1d6908b90e0f4cfa7b9511d89156b4c5f3a18e686998e18888b94a0d0c607277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo " 
 <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  ";
        
        $__internal_1d6908b90e0f4cfa7b9511d89156b4c5f3a18e686998e18888b94a0d0c607277->leave($__internal_1d6908b90e0f4cfa7b9511d89156b4c5f3a18e686998e18888b94a0d0c607277_prof);

        
        $__internal_aee8a2015464fbb88ea5f26b70babd0020bb2918c0a5eb9957678c59ede220d5->leave($__internal_aee8a2015464fbb88ea5f26b70babd0020bb2918c0a5eb9957678c59ede220d5_prof);

    }

    // line 10
    public function block_biens($context, array $blocks = array())
    {
        $__internal_c1eaa28a1187cd678477d315c52271ccc6f3c43802f2993fc3d94b52293deedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1eaa28a1187cd678477d315c52271ccc6f3c43802f2993fc3d94b52293deedb->enter($__internal_c1eaa28a1187cd678477d315c52271ccc6f3c43802f2993fc3d94b52293deedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_a528942a707407d4b007dd9901db9e67d14b2550c8d9c70e721084a7695a8117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a528942a707407d4b007dd9901db9e67d14b2550c8d9c70e721084a7695a8117->enter($__internal_a528942a707407d4b007dd9901db9e67d14b2550c8d9c70e721084a7695a8117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 11
        echo "
 <div id=\"bien\">
<h3>
Liste des reservations
</h3>
 <div class=\"container\">

  
 <div class=\"table-responsive \"> 
<table class=\"table datatable table-bordred table-striped table-inverse display\" id=\"example\">
<thead>
<tr>
    <th>N° </th>
<th>Nom client</th>
<th>Etat</th>

<th>Date de reservation</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 36
            echo "<tr>
<td>


</td>

<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Nom", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute($context["reserve"], "id", array()), "bien" => $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "id", array()))), "html", null, true);
            echo "\">
";
            // line 44
            if (($this->getAttribute($context["reserve"], "etat", array()) == 1)) {
                // line 45
                echo "Validée
";
            } else {
                // line 47
                echo "Non validée
";
            }
            // line 49
            echo "</a></td>
<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "dateDeReservation", array()), "html", null, true);
            echo "</td>


<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "</td>
<td><a id=\"mi\" href=\"#\">Détails</a></td>
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
 </div>

";
        
        $__internal_a528942a707407d4b007dd9901db9e67d14b2550c8d9c70e721084a7695a8117->leave($__internal_a528942a707407d4b007dd9901db9e67d14b2550c8d9c70e721084a7695a8117_prof);

        
        $__internal_c1eaa28a1187cd678477d315c52271ccc6f3c43802f2993fc3d94b52293deedb->leave($__internal_c1eaa28a1187cd678477d315c52271ccc6f3c43802f2993fc3d94b52293deedb_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:listRes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 65,  165 => 62,  152 => 56,  147 => 54,  143 => 53,  137 => 50,  134 => 49,  130 => 47,  126 => 45,  124 => 44,  120 => 43,  114 => 42,  106 => 36,  101 => 35,  75 => 11,  66 => 10,  50 => 3,  41 => 2,  11 => 1,);
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

 <div id=\"bien\">
<h3>
Liste des reservations
</h3>
 <div class=\"container\">

  
 <div class=\"table-responsive \"> 
<table class=\"table datatable table-bordred table-striped table-inverse display\" id=\"example\">
<thead>
<tr>
    <th>N° </th>
<th>Nom client</th>
<th>Etat</th>

<th>Date de reservation</th>
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

<td>{{reserve.Client.Prenom}} {{reserve.Client.Nom}}</td>
<td><a href=\"{{path('contrat',{'id':reserve.id,'bien':reserve.Bien.id})}}\">
{%if reserve.etat == 1%}
Validée
{% else %}
Non validée
{% endif%}
</a></td>
<td>{{reserve.dateDeReservation}}</td>


<td>{{reserve.Bien.nomBien }}</td>
<td>{{reserve.Bien.Localite.Libelle}}</td>

<td>{{reserve.Bien.Proprietaire.Prenom}} {{reserve.Bien.Proprietaire.Nom}}</td>
<td><a id=\"mi\" href=\"#\">Détails</a></td>
<td></td>
</tr>

{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</tbody>
</table>
</div>

</div>
 </div>

{% endblock %}", "AkinaImmobilierBundle:Admin:listRes.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/listRes.html.twig");
    }
}
