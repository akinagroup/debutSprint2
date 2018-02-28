<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_85feb273c9ed051bef269ee50d03afe01822629e65c4707560c7fd47fbfc9854 extends Twig_Template
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
        $__internal_1e7a1c8652526347ea6ea6a70a6b5ce988f062d89253fb51771a4ac75bce4be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7a1c8652526347ea6ea6a70a6b5ce988f062d89253fb51771a4ac75bce4be5->enter($__internal_1e7a1c8652526347ea6ea6a70a6b5ce988f062d89253fb51771a4ac75bce4be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_827fecb307d00e6740e6d6814f50cb8bd093208634c6928543c9600b346e8531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827fecb307d00e6740e6d6814f50cb8bd093208634c6928543c9600b346e8531->enter($__internal_827fecb307d00e6740e6d6814f50cb8bd093208634c6928543c9600b346e8531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1e7a1c8652526347ea6ea6a70a6b5ce988f062d89253fb51771a4ac75bce4be5->leave($__internal_1e7a1c8652526347ea6ea6a70a6b5ce988f062d89253fb51771a4ac75bce4be5_prof);

        
        $__internal_827fecb307d00e6740e6d6814f50cb8bd093208634c6928543c9600b346e8531->leave($__internal_827fecb307d00e6740e6d6814f50cb8bd093208634c6928543c9600b346e8531_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
