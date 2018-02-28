<?php

/* WaldoDatatableBundle:Main:datatableHtml.html.twig */
class __TwigTemplate_9919738741f9887143b935cbd26bc064314ef21fd04949971d079883498c3b5b extends Twig_Template
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
        $__internal_9787e7624bbc77b62e40e639132b17c994270ef8945c77b83a5bc588acef0b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9787e7624bbc77b62e40e639132b17c994270ef8945c77b83a5bc588acef0b48->enter($__internal_9787e7624bbc77b62e40e639132b17c994270ef8945c77b83a5bc588acef0b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:datatableHtml.html.twig"));

        $__internal_9f8ed0a52e922bd5a84046c1ec549fc3ed15fb933bea2fd78013efdfdb920beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8ed0a52e922bd5a84046c1ec549fc3ed15fb933bea2fd78013efdfdb920beb->enter($__internal_9f8ed0a52e922bd5a84046c1ec549fc3ed15fb933bea2fd78013efdfdb920beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:datatableHtml.html.twig"));

        // line 1
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_9787e7624bbc77b62e40e639132b17c994270ef8945c77b83a5bc588acef0b48->leave($__internal_9787e7624bbc77b62e40e639132b17c994270ef8945c77b83a5bc588acef0b48_prof);

        
        $__internal_9f8ed0a52e922bd5a84046c1ec549fc3ed15fb933bea2fd78013efdfdb920beb->leave($__internal_9f8ed0a52e922bd5a84046c1ec549fc3ed15fb933bea2fd78013efdfdb920beb_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_205b247c93e4952ee606ab8cf921cf0cf6c930159038a9367784226b676ae8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205b247c93e4952ee606ab8cf921cf0cf6c930159038a9367784226b676ae8b4->enter($__internal_205b247c93e4952ee606ab8cf921cf0cf6c930159038a9367784226b676ae8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e90df1407855df9d01cbdcc2283243f0a78930b4b7357b88c70fa0790d2544ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90df1407855df9d01cbdcc2283243f0a78930b4b7357b88c70fa0790d2544ef->enter($__internal_e90df1407855df9d01cbdcc2283243f0a78930b4b7357b88c70fa0790d2544ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 2
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo "<form name=\"frm-";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "    <table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "display table table-bordered")) : ("display table table-bordered")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">
        <thead>
            <tr>
            ";
        // line 6
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 7
            echo "                <th width=\"1%\" ><input type=\"checkbox\" name=\"datatable_action_all\" /></th>
            ";
        }
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["label"] => $context["key"]) {
            // line 10
            echo "                ";
            if (($context["label"] != "_identifier_")) {
                // line 11
                echo "                    <th>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</th>
                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </tr>
        </thead>
        ";
        // line 16
        if (($context["search"] ?? $this->getContext($context, "search"))) {
            // line 17
            echo "        ";
            $context["i"] = 0;
            // line 18
            echo "        <tfoot>
            <tr>
                ";
            // line 20
            if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
                // line 21
                echo "                <th></th>
                ";
            }
            // line 23
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["label"] => $context["key"]) {
                // line 24
                echo "                    ";
                if (($context["label"] != "_identifier_")) {
                    // line 25
                    echo "                        ";
                    if ( !twig_test_empty(($context["searchFields"] ?? $this->getContext($context, "searchFields")))) {
                        // line 26
                        echo "                            ";
                        if (twig_in_filter(($context["i"] ?? $this->getContext($context, "i")), ($context["searchFields"] ?? $this->getContext($context, "searchFields")))) {
                            // line 27
                            echo "                            <td><input index=\"";
                            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                            echo "\" searchable=\"true\" type=\"text\" placeholder=\"";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("datatable.common.search", array(), "messages");
                            echo "\" class=\"search_init\" /></td>
                            ";
                        } else {
                            // line 29
                            echo "                            <td></td>
                            ";
                        }
                        // line 31
                        echo "                        ";
                    }
                    // line 32
                    echo "                    ";
                }
                // line 33
                echo "                    ";
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 34
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tr>
        </tfoot>
        ";
        }
        // line 38
        echo "    </table>
";
        // line 39
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo "</form>";
        }
        
        $__internal_e90df1407855df9d01cbdcc2283243f0a78930b4b7357b88c70fa0790d2544ef->leave($__internal_e90df1407855df9d01cbdcc2283243f0a78930b4b7357b88c70fa0790d2544ef_prof);

        
        $__internal_205b247c93e4952ee606ab8cf921cf0cf6c930159038a9367784226b676ae8b4->leave($__internal_205b247c93e4952ee606ab8cf921cf0cf6c930159038a9367784226b676ae8b4_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Main:datatableHtml.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 39,  150 => 38,  145 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  126 => 29,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  104 => 23,  100 => 21,  98 => 20,  94 => 18,  91 => 17,  89 => 16,  85 => 14,  79 => 13,  73 => 11,  70 => 10,  65 => 9,  61 => 7,  59 => 6,  50 => 3,  44 => 2,  26 => 1,);
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
{% if multiple %}<form name=\"frm-{{ id }}\">{% endif %}
    <table class=\"{{ class|default('display table table-bordered') }}\" id=\"{{ id }}\">
        <thead>
            <tr>
            {% if multiple %}
                <th width=\"1%\" ><input type=\"checkbox\" name=\"datatable_action_all\" /></th>
            {% endif %}
            {% for label,key in fields %}
                {% if label != '_identifier_' %}
                    <th>{{ label }}</th>
                {% endif %}
            {% endfor %}
            </tr>
        </thead>
        {% if search %}
        {% set i = 0 %}
        <tfoot>
            <tr>
                {% if multiple %}
                <th></th>
                {% endif %}
                {% for label,key in fields %}
                    {% if label != '_identifier_' %}
                        {% if searchFields is not empty %}
                            {% if i in searchFields %}
                            <td><input index=\"{{ i }}\" searchable=\"true\" type=\"text\" placeholder=\"{% trans %}datatable.common.search{% endtrans %}\" class=\"search_init\" /></td>
                            {% else %}
                            <td></td>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                    {% set i = i+1 %}
                {% endfor %}
            </tr>
        </tfoot>
        {% endif %}
    </table>
{% if multiple %}</form>{% endif %}
{% endblock  %}
", "WaldoDatatableBundle:Main:datatableHtml.html.twig", "/var/www/html/MyJoob/vendor/waldo/datatable-bundle/Resources/views/Main/datatableHtml.html.twig");
    }
}
