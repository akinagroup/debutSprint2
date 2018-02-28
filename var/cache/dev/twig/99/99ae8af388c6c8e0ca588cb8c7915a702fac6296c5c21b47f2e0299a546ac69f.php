<?php

/* WaldoDatatableBundle:Main:datatableJs.html.twig */
class __TwigTemplate_0320e47d8ae2fab5ecc2b9ce45359cb2a3ee25a6c7d2bcd7699141fbb7cf93ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12201aac5f0f8de6b1c0c62d720f65569ac2fbf93b0c0d73435d73d854892c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12201aac5f0f8de6b1c0c62d720f65569ac2fbf93b0c0d73435d73d854892c0b->enter($__internal_12201aac5f0f8de6b1c0c62d720f65569ac2fbf93b0c0d73435d73d854892c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:datatableJs.html.twig"));

        $__internal_0c15d254cf3c89f67b2b7cf94457c829f497ee61252c89c5e2055dde973123d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c15d254cf3c89f67b2b7cf94457c829f497ee61252c89c5e2055dde973123d7->enter($__internal_0c15d254cf3c89f67b2b7cf94457c829f497ee61252c89c5e2055dde973123d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:datatableJs.html.twig"));

        // line 1
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_12201aac5f0f8de6b1c0c62d720f65569ac2fbf93b0c0d73435d73d854892c0b->leave($__internal_12201aac5f0f8de6b1c0c62d720f65569ac2fbf93b0c0d73435d73d854892c0b_prof);

        
        $__internal_0c15d254cf3c89f67b2b7cf94457c829f497ee61252c89c5e2055dde973123d7->leave($__internal_0c15d254cf3c89f67b2b7cf94457c829f497ee61252c89c5e2055dde973123d7_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_ab3951ddea8d6e1b3d00d6eab8cc5dfce4174874488decc5699c7cc9a833ef8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3951ddea8d6e1b3d00d6eab8cc5dfce4174874488decc5699c7cc9a833ef8f->enter($__internal_ab3951ddea8d6e1b3d00d6eab8cc5dfce4174874488decc5699c7cc9a833ef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c7fcf5ccec5eb1a68b425ee739eb154e8530c6ec6e07444989240efdaf4cad2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fcf5ccec5eb1a68b425ee739eb154e8530c6ec6e07444989240efdaf4cad2b->enter($__internal_c7fcf5ccec5eb1a68b425ee739eb154e8530c6ec6e07444989240efdaf4cad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('#";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').DataTable({ ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js"] ?? $this->getContext($context, "js")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["elementName"] => $context["element"]) {
            echo twig_escape_filter($this->env, $context["elementName"], "html", null, true);
            echo ":";
            echo $this->env->getExtension('Waldo\DatatableBundle\Twig\Extension\DatatableExtension')->printDatatableOption($context["element"], $context["elementName"]);
            if (($this->getAttribute($context["loop"], "last", array()) != true)) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['elementName'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " });
});
";
        // line 8
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 9
            $this->loadTemplate("WaldoDatatableBundle:Snippet:multipleRaw.js.twig", "WaldoDatatableBundle:Main:datatableJs.html.twig", 9)->display($context);
        }
        // line 11
        if (((($context["search"] ?? $this->getContext($context, "search")) == true) &&  !twig_test_empty(($context["searchFields"] ?? $this->getContext($context, "searchFields"))))) {
            // line 12
            $this->loadTemplate("WaldoDatatableBundle:Snippet:individualSearchField.js.twig", "WaldoDatatableBundle:Main:datatableJs.html.twig", 12)->display($context);
        }
        // line 14
        echo "</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c7fcf5ccec5eb1a68b425ee739eb154e8530c6ec6e07444989240efdaf4cad2b->leave($__internal_c7fcf5ccec5eb1a68b425ee739eb154e8530c6ec6e07444989240efdaf4cad2b_prof);

        
        $__internal_ab3951ddea8d6e1b3d00d6eab8cc5dfce4174874488decc5699c7cc9a833ef8f->leave($__internal_ab3951ddea8d6e1b3d00d6eab8cc5dfce4174874488decc5699c7cc9a833ef8f_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Main:datatableJs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 14,  100 => 12,  98 => 11,  95 => 9,  93 => 8,  53 => 6,  49 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block main %}

{% spaceless %}
<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('#{{ id }}').DataTable({ {% for elementName, element in js %}{{ elementName }}:{{ element|printDatatableOption(elementName) }}{% if loop.last != true %},{%endif%}{% endfor %} });
});
{% if multiple %}
{% include \"WaldoDatatableBundle:Snippet:multipleRaw.js.twig\" %}
{% endif %}
{% if search == true and searchFields is not empty %}
{% include \"WaldoDatatableBundle:Snippet:individualSearchField.js.twig\" %}
{% endif %}
</script>
{% endspaceless %}
{% endblock  %}
", "WaldoDatatableBundle:Main:datatableJs.html.twig", "/var/www/html/MyJoob/vendor/waldo/datatable-bundle/Resources/views/Main/datatableJs.html.twig");
    }
}
