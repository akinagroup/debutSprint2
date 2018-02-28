<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_47dba9bd1cc1de4c8d9aa9dbdc0c7dbfc9450b96e71fa91f9d4549fc2a0180b6 extends Twig_Template
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
        $__internal_8ddf412838aa1ff8bf355da79f50748737b10f573a7ae00bcfd63dd72b99bb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ddf412838aa1ff8bf355da79f50748737b10f573a7ae00bcfd63dd72b99bb5e->enter($__internal_8ddf412838aa1ff8bf355da79f50748737b10f573a7ae00bcfd63dd72b99bb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_79a253c08c0a12e2a68df1a000ef799521c1367d54d1c0abf8cc74453a47aaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a253c08c0a12e2a68df1a000ef799521c1367d54d1c0abf8cc74453a47aaae->enter($__internal_79a253c08c0a12e2a68df1a000ef799521c1367d54d1c0abf8cc74453a47aaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8ddf412838aa1ff8bf355da79f50748737b10f573a7ae00bcfd63dd72b99bb5e->leave($__internal_8ddf412838aa1ff8bf355da79f50748737b10f573a7ae00bcfd63dd72b99bb5e_prof);

        
        $__internal_79a253c08c0a12e2a68df1a000ef799521c1367d54d1c0abf8cc74453a47aaae->leave($__internal_79a253c08c0a12e2a68df1a000ef799521c1367d54d1c0abf8cc74453a47aaae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
