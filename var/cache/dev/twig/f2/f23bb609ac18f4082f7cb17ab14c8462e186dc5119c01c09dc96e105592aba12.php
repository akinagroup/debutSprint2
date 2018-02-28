<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ef076e3ffb574318bd4102006f61f8ae3496ee31fae5f211df24a2534ca20f4f extends Twig_Template
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
        $__internal_cbd72b057d92fd965fecd2e0c8e7dcde8b49ce517af0d766bcce66dccc4f70e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd72b057d92fd965fecd2e0c8e7dcde8b49ce517af0d766bcce66dccc4f70e4->enter($__internal_cbd72b057d92fd965fecd2e0c8e7dcde8b49ce517af0d766bcce66dccc4f70e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bf5d94ce0d2f1648bf5a616b98a1287becd78fe91f51bdbb0b725fb442df1ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5d94ce0d2f1648bf5a616b98a1287becd78fe91f51bdbb0b725fb442df1ac0->enter($__internal_bf5d94ce0d2f1648bf5a616b98a1287becd78fe91f51bdbb0b725fb442df1ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_cbd72b057d92fd965fecd2e0c8e7dcde8b49ce517af0d766bcce66dccc4f70e4->leave($__internal_cbd72b057d92fd965fecd2e0c8e7dcde8b49ce517af0d766bcce66dccc4f70e4_prof);

        
        $__internal_bf5d94ce0d2f1648bf5a616b98a1287becd78fe91f51bdbb0b725fb442df1ac0->leave($__internal_bf5d94ce0d2f1648bf5a616b98a1287becd78fe91f51bdbb0b725fb442df1ac0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
