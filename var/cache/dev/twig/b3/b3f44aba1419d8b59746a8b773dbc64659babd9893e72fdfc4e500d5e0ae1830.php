<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7b94ab903088a2b50929f45b51f92ad22438edf2950fa28dd4831a3b2246223a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c101e707592a4f28867c87e339a0dd6d6bdc1f6cfea901638594390ce56d7867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c101e707592a4f28867c87e339a0dd6d6bdc1f6cfea901638594390ce56d7867->enter($__internal_c101e707592a4f28867c87e339a0dd6d6bdc1f6cfea901638594390ce56d7867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_72164fa31afa0d837aa46332f67e102fad71f2aae3b50b25b9a8df60637f285b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72164fa31afa0d837aa46332f67e102fad71f2aae3b50b25b9a8df60637f285b->enter($__internal_72164fa31afa0d837aa46332f67e102fad71f2aae3b50b25b9a8df60637f285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c101e707592a4f28867c87e339a0dd6d6bdc1f6cfea901638594390ce56d7867->leave($__internal_c101e707592a4f28867c87e339a0dd6d6bdc1f6cfea901638594390ce56d7867_prof);

        
        $__internal_72164fa31afa0d837aa46332f67e102fad71f2aae3b50b25b9a8df60637f285b->leave($__internal_72164fa31afa0d837aa46332f67e102fad71f2aae3b50b25b9a8df60637f285b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c394af5ea66e1cdd38d00239e0e22f7e6795a40d8fb717609a8bc575dcb68d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c394af5ea66e1cdd38d00239e0e22f7e6795a40d8fb717609a8bc575dcb68d7c->enter($__internal_c394af5ea66e1cdd38d00239e0e22f7e6795a40d8fb717609a8bc575dcb68d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_726c3c89454f3e354f95a8939ed27e0b49fe0875b973055d41142765c8cc5323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726c3c89454f3e354f95a8939ed27e0b49fe0875b973055d41142765c8cc5323->enter($__internal_726c3c89454f3e354f95a8939ed27e0b49fe0875b973055d41142765c8cc5323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_726c3c89454f3e354f95a8939ed27e0b49fe0875b973055d41142765c8cc5323->leave($__internal_726c3c89454f3e354f95a8939ed27e0b49fe0875b973055d41142765c8cc5323_prof);

        
        $__internal_c394af5ea66e1cdd38d00239e0e22f7e6795a40d8fb717609a8bc575dcb68d7c->leave($__internal_c394af5ea66e1cdd38d00239e0e22f7e6795a40d8fb717609a8bc575dcb68d7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97ead31dcc78d675f5f97fc9ce8abb12dc94584059bf2b510af150c28f713d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ead31dcc78d675f5f97fc9ce8abb12dc94584059bf2b510af150c28f713d42->enter($__internal_97ead31dcc78d675f5f97fc9ce8abb12dc94584059bf2b510af150c28f713d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90f3b99414fc9c620be7e779b99548ff94eb02822f7c7b384dd371aa94d3b2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f3b99414fc9c620be7e779b99548ff94eb02822f7c7b384dd371aa94d3b2fc->enter($__internal_90f3b99414fc9c620be7e779b99548ff94eb02822f7c7b384dd371aa94d3b2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_90f3b99414fc9c620be7e779b99548ff94eb02822f7c7b384dd371aa94d3b2fc->leave($__internal_90f3b99414fc9c620be7e779b99548ff94eb02822f7c7b384dd371aa94d3b2fc_prof);

        
        $__internal_97ead31dcc78d675f5f97fc9ce8abb12dc94584059bf2b510af150c28f713d42->leave($__internal_97ead31dcc78d675f5f97fc9ce8abb12dc94584059bf2b510af150c28f713d42_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
