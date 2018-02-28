<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d0ef1e6d7c6258e0be09ff6b84d5f6aba5b13dccde3794a15c745ac3b1b217a1 extends Twig_Template
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
        $__internal_a573f89ead5837a4538566a6cda36005308902cfc7cc339e2a391b9dc669e4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a573f89ead5837a4538566a6cda36005308902cfc7cc339e2a391b9dc669e4ab->enter($__internal_a573f89ead5837a4538566a6cda36005308902cfc7cc339e2a391b9dc669e4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1f83f3713ee3cb4fd583eb840294aa421c838636044d6fbe376c210e17b8487c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f83f3713ee3cb4fd583eb840294aa421c838636044d6fbe376c210e17b8487c->enter($__internal_1f83f3713ee3cb4fd583eb840294aa421c838636044d6fbe376c210e17b8487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a573f89ead5837a4538566a6cda36005308902cfc7cc339e2a391b9dc669e4ab->leave($__internal_a573f89ead5837a4538566a6cda36005308902cfc7cc339e2a391b9dc669e4ab_prof);

        
        $__internal_1f83f3713ee3cb4fd583eb840294aa421c838636044d6fbe376c210e17b8487c->leave($__internal_1f83f3713ee3cb4fd583eb840294aa421c838636044d6fbe376c210e17b8487c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
