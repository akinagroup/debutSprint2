<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b7236a52203e2a9886378aa833cdc44e94b2f3f2f896d3f33512c20a8c4119c3 extends Twig_Template
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
        $__internal_53e3bf3c59280c8581a9cc2215e685753be4ed609d647ad780dbae84d6cffc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e3bf3c59280c8581a9cc2215e685753be4ed609d647ad780dbae84d6cffc75->enter($__internal_53e3bf3c59280c8581a9cc2215e685753be4ed609d647ad780dbae84d6cffc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2a365c2c142856148be856acacdd472f41bfeec4bb4ffa96e8b6e7a0e75d6074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a365c2c142856148be856acacdd472f41bfeec4bb4ffa96e8b6e7a0e75d6074->enter($__internal_2a365c2c142856148be856acacdd472f41bfeec4bb4ffa96e8b6e7a0e75d6074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_53e3bf3c59280c8581a9cc2215e685753be4ed609d647ad780dbae84d6cffc75->leave($__internal_53e3bf3c59280c8581a9cc2215e685753be4ed609d647ad780dbae84d6cffc75_prof);

        
        $__internal_2a365c2c142856148be856acacdd472f41bfeec4bb4ffa96e8b6e7a0e75d6074->leave($__internal_2a365c2c142856148be856acacdd472f41bfeec4bb4ffa96e8b6e7a0e75d6074_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
