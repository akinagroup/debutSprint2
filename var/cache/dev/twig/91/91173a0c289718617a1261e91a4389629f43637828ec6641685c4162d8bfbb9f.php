<?php

/* WaldoDatatableBundle:Snippet:individualSearchField.js.twig */
class __TwigTemplate_45e6cc2d4454a4e049120ddb54217e27ec45bf6233b8c19a497071c73c457d1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_378f707084c01f859af28b94a5893c4bf26e248c3fb965cd09241de194701b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378f707084c01f859af28b94a5893c4bf26e248c3fb965cd09241de194701b73->enter($__internal_378f707084c01f859af28b94a5893c4bf26e248c3fb965cd09241de194701b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Snippet:individualSearchField.js.twig"));

        $__internal_bbd294c37efdca99d86a9d9ba96238f62e19ac1e6b013eecd481fc4ff45a5f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd294c37efdca99d86a9d9ba96238f62e19ac1e6b013eecd481fc4ff45a5f0e->enter($__internal_bbd294c37efdca99d86a9d9ba96238f62e19ac1e6b013eecd481fc4ff45a5f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Snippet:individualSearchField.js.twig"));

        // line 1
        echo "\$('#";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "js", null, true);
        echo "').one('draw.dt', function() {

var delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();

\$('#";
        // line 11
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "js", null, true);
        echo "').DataTable().columns().every(function() {

    \$(this.footer()).find('input[type=\"text\"][searchable=\"true\"]').each(function() {
        var me = this;
        \$(this).on('keyup change', function() {

            column = \$('#";
        // line 17
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "js", null, true);
        echo "').DataTable().columns(me.getAttribute('index'));

            if ( column.search() !== me.value ) {
                delay(function(){
                    column.search( me.value ).draw();
                    }, 400);
            }
        });
    });
});

});
";
        
        $__internal_378f707084c01f859af28b94a5893c4bf26e248c3fb965cd09241de194701b73->leave($__internal_378f707084c01f859af28b94a5893c4bf26e248c3fb965cd09241de194701b73_prof);

        
        $__internal_bbd294c37efdca99d86a9d9ba96238f62e19ac1e6b013eecd481fc4ff45a5f0e->leave($__internal_bbd294c37efdca99d86a9d9ba96238f62e19ac1e6b013eecd481fc4ff45a5f0e_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Snippet:individualSearchField.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  39 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\$('#{{ id }}').one('draw.dt', function() {

var delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();

\$('#{{ id }}').DataTable().columns().every(function() {

    \$(this.footer()).find('input[type=\"text\"][searchable=\"true\"]').each(function() {
        var me = this;
        \$(this).on('keyup change', function() {

            column = \$('#{{ id }}').DataTable().columns(me.getAttribute('index'));

            if ( column.search() !== me.value ) {
                delay(function(){
                    column.search( me.value ).draw();
                    }, 400);
            }
        });
    });
});

});
", "WaldoDatatableBundle:Snippet:individualSearchField.js.twig", "/var/www/html/MyJoob/vendor/waldo/datatable-bundle/Resources/views/Snippet/individualSearchField.js.twig");
    }
}
