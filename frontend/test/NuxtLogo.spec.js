import { mount } from '@vue/test-utils';
import NuxtLogo from '@/src/components/NuxtLogo.vue';

describe('NuxtLogo', () => {
  test('is a Vue instance', () => {
    const wrapper = mount(NuxtLogo);
    expect(wrapper.vm).toBeTruthy();
  });
});
